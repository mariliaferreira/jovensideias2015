<?php
$checked = array();
$erros = '';
$jid = '0000087';

require ($include . "_class_form.php");
$form = new form;

switch ($pag) {
	case '1' :
	/* Nao foi executado acao */
		if (strlen($acao) == 0) {
			$proto = $_SESSION['proto'];
			if (strlen($proto) > 0) {
				$sql = "select * from submit_documento where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					$dd[1] = $line['doc_id'];
					$dd[2] = $line['doc_sessao'];
					$checked[round($dd[2])] = 'checked';
					$_SESSION['protocolo'] = $line['doc_protocolo'];
					if (trim($line['doc_status']) != '@') {
						redirecina('inscricao_resumo.php');
					}
				}

			}
		} else {
			/* Acao */
			$checked[round($dd[2])] = 'checked';
			$ok = 1;
			$erros = '';
			/* CPF Obrigatório */
			if (strlen($dd[1]) == 0) {
				$erros .= 'CPF é obrigatório.';
				$ok = -1;
			}
			/* Regra CPD */
			if (cpf($dd[1])) {

			} else {
				if (strlen($erros) > 0) { $erros .= '<BR>';
				}
				$erros .= 'Ops, este CPF parece ser inválido.';
				$ok = -2;
			}
			/* Valia se ja¡ existe projeto deste CPF */
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
				$link = '<A HREF="inscricao_resumo.php?dd0=' . $cpf . '&dd1=' . checkpost($cpf) . '">Ver o resumo deste projeto.</A>';
				$erros .= $link;
				$ok = -3;
			}
			/* Regra tipo de modalidade */
			if (strlen($dd[2]) == 0) {
				if (strlen($erros) > 0) { $erros .= '<BR>';
				}
				$erros .= 'Erro, não foi selecionado a categoria!';
				$ok = -4;
			}
			/* OK */
			if ($ok == 1) {
				$data = date("Ymd");
				$hora = date("H:i");
				$sessao = round($dd[2]);
				$proto = sonumero($dd[1]);
				$_SESSION['proto'] = $proto;

				echo '<font color="white">';
				/* Atualiza protocolo */
				updatex_submit();

				$sql = "select * from submit_documento where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					$sql = "update submit_documento set
								doc_data = $data,
								doc_hora = '$hora',
								doc_sessao = $sessao
								where doc_id = '$proto' and doc_journal_id = '$jid' ";
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
					updatex_submit();
				}
				$sql = "select * from submit_documento where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					$proto = $line['doc_protocolo'];
				} else {
					echo "ERRO #323!";
					exit ;
				}
				$_SESSION['protocolo'] = $proto;
				$_SESSION['tipo'] = $sessao;
				redirecina('inscricao-passo2.php');
			}
		}
		break;
	case '2' :
		$proto = $_SESSION['proto'];
		if (strlen($proto) == 0) {
			redirecina('inscricao.php');
		}
		$proto = $_SESSION['protocolo'];
		$tipo = $_SESSION['tipo'];
		$tpa = array('', 'PIBIC', 'PIBIC Jr', 'PIBITI', 'TCC', 'Dissertação', 'Tese', 'Outros');

		require_once ("_ged_submit_files.php");
		if (strlen($proto) == 0) {
			redirecina('inscricao.php');
		}

		if (strlen($acao) == 0) {
			$sql = "select * from submit_documento where doc_protocolo = '" . $proto . "' ";
			$rlt = db_query($sql);
			if ($line = db_read($rlt)) {
				$dd[1] = trim($line['doc_field_1']);
				$dd[2] = trim($line['doc_field_2']);
				$dd[3] = trim($line['doc_field_3']);
				$dd[4] = trim($line['doc_1_titulo']);
				$dd[5] = trim($line['doc_2_titulo']);
				$dd[6] = trim($line['doc_field_6']);
				$check = array();
				$check[$dd[3]] = ' checked ';
			}
		} else {

			$check = array();
			if (strlen($dd[3]) > 0) { $check[$dd[3]] = ' checked ';
			}

			/* Validador */
			$ok = 1;
			/* Orientador */
			if ((strlen($dd[1]) < 5) and ($tipo != '1011')) { $ok = -1;
				$erro['dd1'] = '(Nome do orientador é obrigatório)';
			}
			if ((strlen($dd[2]) < 5) and ($tipo != '1011')) { $ok = -2;
				$erro['dd2'] = '(E-mail do orientador é obrigatório)';
			}

			/* Modalidade */
			if (strlen($dd[3]) == 0) { $ok = -3;
				$erro['dd3'] = '(Categoria do projeto é obrigatória)';
			}
			if ($dd[3] == '7') {
				if (strlen($dd[4]) < 3) { $ok = -4;
					$erro['dd4'] = '(Nome da Categoria do projeto é obrigatória)';
				}
			}
			/* Titulo do projeto */
			if (strlen($dd[5]) < 5) { $ok = -5;
				$erro['dd5'] = '(Titulo do projeto é obrigatório)';
			}
			//exit;
			echo '==>' . $ok;
			if ($ok == 1) {
				$sql = "update submit_documento set 
						doc_1_titulo = '" . $dd[4] . "',
						doc_2_titulo = '" . $dd[5] . "',
						doc_field_1 = '" . $dd[1] . "',
						doc_field_2 = '" . $dd[2] . "',
						doc_field_3 = '" . $dd[3] . "',
						doc_field_6 = '" . $dd[6] . "',
						doc_field_5 = '" . $tpa[$dd[3]] . "' 
					where doc_protocolo = '" . $proto . "'
					";
				$rlt = db_query($sql);
				redirecina('inscricao-passo3.php');
			}
		}
		break;

	case '3' :
		$proto = $_SESSION['proto'];
		$protocolo = $_SESSION['protocolo'];
		if (strlen($proto) == 0) {
			redirecina('inscricao.php');
		}

		/* Excluir */
		if (($dd[21] == 'DEL') and ($dd[23] == checkpost($dd[22]))) {

			$sql = "delete from submit_autores where id_qa = " . $dd[22];
			$rlt = db_query($sql);
		}
		
		if (strlen($acao) > 0) {
			/* Validador */
			$ok = 1;
			/* Nome */
			if (strlen($dd[10]) < 5) { $ok = -1;
				$erro['dd10'] = '(Nome é obrigatório)';
			}
			/* Nome */
			if (strlen($dd[11]) < 5) { $ok = -2;
				$erro['dd11'] = '(e-mail é obrigatório)';
			}
			/* Telefone */
			if (strlen($dd[12]) < 5) { $ok = -3;
				$erro['dd12'] = '(telefone é obrigatório)';
			}
			/* Titulacao */
			if (strlen($dd[20]) < 1) { $ok = -4;
				$erro['dd20'] = '(titulação é obrigatória)';
			}

			if ($ok == 1) {
				$email = $dd[11];
				$nome = $dd[10];
				$nome_asc = UpperCaseSql($dd[10]);
				$titulacao = $dd[20];
				$date = date("Ymd");
				$instituicao = $dd[15];
				$telefone = $dd[12];
				$cidade = $dd[14];
				$estado = $dd[13];

				$sql = "select count(*) as total from submit_autores 
						where qa_protocolo = '" . $protocolo . "'
						";
				$rlt = db_query($sql);
				$line = db_read($rlt);
				$ord = ($line['total'] + 1);

				$sql = "select * from submit_autores 
						where qa_protocolo = '" . $protocolo . "'
						and qa_email = '$email'
						";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					$sql = "update submit_autores set
								qa_nome = '$nome',
								qa_nome_asc = '$nome',
								qa_titulo = '$titulacao',
								qa_instituicao = '$instituicao',
								qa_estado = '$estado',
								qa_cidade = '$cidade'
								where id_qa = " . $line['id_qa'];
					$rlt = db_query($sql);
				} else {
					$sql = "INSERT INTO submit_autores(
            					qa_nome, qa_nome_asc, qa_lattes, qa_titulo, qa_email, 
            					qa_protocolo, qa_update, qa_cpf, qa_instituicao, qa_telefone, 
            					qa_mini, qa_pais, qa_estado, qa_cidade, qa_ajax_cidade, qa_ordem, 
            					qa_instituicao_alt)
    						VALUES ('$nome', '$nome_asc', '', '$titulacao', '$email', 
            					'$protocolo', $date, '', '$instituicao', '$telefone', 
            					'', '', '$estado', '$cidade', '', $ord, 
            					'');";
					$rlt = db_query($sql);

				}
				$dd[10] = '';
				$dd[11] = '';
				$dd[12] = '';
				$dd[13] = '';
			}
			if ($acao == 'Próximo') { redirecina('inscricao-passo4.php'); }
		}
		break;
	case '4':
		$proto = $_SESSION['proto'];
		if (strlen($proto) == 0) {
			redirecina('inscricao.php');
		}
	
		if ($acao == 'Próximo') { redirecina('inscricao-passo5.php'); }
		break;
	case '5' :
		$proto = $_SESSION['proto'];
		if (strlen($proto) == 0) {
			redirecina('inscricao.php');
		}

		if (strlen($acao) == 0) {
			if (strlen($proto) > 0) {
				$sql = "select * from submit_documento where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);
				if ($line = db_read($rlt)) {
					if ($line['doc_status'] != '@') {
						//redirecina('inscricao_resumo.php');
					}
				}

			}
		} else {
			if ($dd[1] == '1') {
				$sql = "update submit_documento set doc_status = 'A' where doc_id = '$proto' and doc_journal_id = '$jid' ";
				$rlt = db_query($sql);

				/* Enviar e-mail para equipe */
				redirecina('inscricao_resumo.php?dd0='.$proto.'&dd1='.checkpost($proto));
			}
		}
		break;
	case '5' :
		$proto = $_SESSION['proto'];
		if (strlen($proto) == 0) {
			redirecina('inscricao.php');
		}
		break;
}

function updatex_submit() {
	global $base;
	$c = 'doc';
	$c1 = 'id_' . $c;
	$c2 = $c . '_protocolo';
	$c3 = 7;
	$sql = "update submit_documento set $c2 = lpad($c1,$c3,0) where $c2='' ";
	if ($base == 'pgsql') { $sql = "update submit_documento set $c2 = trim(to_char(id_" . $c . ",'" . strzero(0, $c3) . "')) where $c2='' ";
	}
	$rlt = db_query($sql);
}
?>