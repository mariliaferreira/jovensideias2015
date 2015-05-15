<?php
$checked = array();
$erros = '';
$jid = '0000087';

require_once ("_ged_submit_files.php");

require ("../../_include/_class_form.php");
$form = new form;

switch ($pag) {
	case '1' :
	/* Não foi executado acao */
		if (strlen($acao) == 0) {
			$proto = $_SESSION['proto'];
			if (strlen($proto) > 0) {
				$sql = "select * from submit_documento where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					$dd[1] = $line['doc_id'];
					$dd[2] = $line['doc_sessao'];
					$checked[round($dd[2])] = 'checked';
					if ($line['doc_status'] != '@') {
						redirecina('inscricao_resumo.php');
					}
				}

			}
		} else {
			/* Acao */
			$checked[round($dd[2])] = 'checked';
			$ok = 1;
			/* Regra CPD */
			if (cpf($dd[1])) {
			} else {
				if (strlen($erros) > 0) { $erros .= '<BR>';
				}
				$erros .= 'Ops, este CPF parece ser inválido.';
				$ok = 0;
			}
			/* Valia se já existe projeto deste CPF */
			$cpf = sonumero($dd[1]);
			$sql = "select * from submit_documento 
							where doc_id = '$cpf' 
									and doc_journal_id = '$jid' 
									and (doc_status <> '@' and doc_status <> 'X')";
			
			$rlt = db_query($sql);
			if ($line = db_read($rlt)) {
				if (strlen($erros) > 0) { $erros .= '<BR>';
				}
				$erros .= 'Ops, já existe um projeto submetido com esse CPF. ';
				$link = '<A HREF="inscricao_resumo.php?dd0='.$cpf.'&dd1='.checkpost($cpf).'">Ver o resumo deste projeto.</A>';
				$erros .= $link;
				$ok = 0;
			}
			/* Regra tipo de modalidade */
			if (strlen($dd[2]) == 0) {
				if (strlen($erros) > 0) { $erros .= '<BR>';
				}
				$erros .= 'Erro, não foi selecionado a categoria!';
				$ok = 0;
			}
			/* OK */
			if ($ok == 1) {
				$data = date("Ymd");
				$hora = date("H:i");
				$sessao = round($dd[2]);
				$proto = sonumero($dd[1]);
				$_SESSION['proto'] = $proto;

				echo '<font color="white">';
				$sql = "select * from submit_documento where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					$sql = "update submit_documento set
								doc_data = $data,
								doc_hora = '$hora',
								doc_sessao = $sessao
								where doc_id = '$proto' and doc_journal_id = '$jid' ";
					echo $sql;
					$rlt = db_query($sql);
				} else {
					$sql = "insert into submit_documento 
								(doc_protocolo, doc_data, doc_hora,
								doc_id, doc_1_titulo, doc_1_idioma,
								doc_status, doc_sessao, doc_journal_id)
								values 
								('',$data,'$hora',
								'$proto','','pt_BR',
								'@',$sessao,'$jid')						
						";
					$rlt = db_query($sql);
				}
				redireciona('inscricao-passo2.php');
			}
		}
		break;
	case '2' :
		$proto = $_SESSION['proto'];
		if (strlen($proto) == 0)
			{
				redirecina('inscricao.php');
			}
		break;			
	case '3' :
		$proto = $_SESSION['proto'];
		if (strlen($proto) == 0)
			{
				redirecina('inscricao.php');
			}
		break;
	case '4' :
		$proto = $_SESSION['proto'];
		if (strlen($proto) == 0)
			{
				redirecina('inscricao.php');
			}

		if (strlen($acao) == 0) {
			if (strlen($proto) > 0) {
				$sql = "select * from submit_documento where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					if ($line['doc_status'] != '@') {
						redirecina('inscricao_resumo.php');
					}
				}

			}
		} else {
			if ($dd[1] == '1') {
				$sql = "update submit_documento set doc_status = 'A' where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);

				/* Enviar e-mail para equipe */
				redirecina('inscricao_resumo.php');
			}
		}
		break;
}
?>