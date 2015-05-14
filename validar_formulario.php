<?php
$checked = array();
$erros = '';
$jid = '0000087';

require ("../_include/_class_form.php");
$form = new form;

switch ($pag) {
	case '1' :
		if (strlen($acao) == 0) {

		} else {
			$checked[round($dd[2])] = 'checked';
			$ok = 1;
			/* Regra CPD */
			if (cpf($dd[1])) {
			} else {
				if (strlen($erros) > 0) { $erros .= '<BR>';
				}
				$erros .= 'Erro, CPF inválido!';
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
}
?>