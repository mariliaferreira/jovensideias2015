<?php
require ("db.php");
?>
<!DOCTYPE html>
<html>
	<?php
	require ('componentes/cab.php');
	?>

	<body>
		<div class="container">
			<?php
			require ('componentes/nav.php');

			/* Valida formulario */
			$pag = 3;
			require ("validar_formulario.php");
			?>
			<form action="<?php page();?>" method="post">
				<article>
					<h2>Inscrição</h2>
					<div class="inscricao">
						<ul>
							<li>
								<a href="inscricao.php">Categoria</a>
							</li>
							<li>
								<a href="inscricao-passo3.php"><a href="inscricao-passo2.php">Sobre o Projeto</a>
							</li>
							<li class="active">
								Equipe</a>
							</li>
							<li>
								<a href="inscricao-passo4.php">Arquivos</a>
							</li>
							<li>
								<a href="inscricao-passo5.php">Confirmar</a>
							</li>
						</ul>
					</div>
					<div class="dados-inscricao-2">
						<section>
							<h3>Equipe</h3>
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<th width="5%">pos</th><th>Nome</th><th>e-mail</th>
								</tr>
								<?php
								$protocolo = trim($protocolo);
								$sql = "select * from submit_autores where qa_protocolo = '$protocolo' ";
								$rlt = db_query($sql);

								while ($line = db_read($rlt)) {
									echo '<tr>';
									echo '<td align="center" style="border: 1px solid #B0B0B0; padding: 5px 5px 5px 5px;">';
									echo $line['qa_ordem'];
									echo '<td style="border: 1px solid #B0B0B0; padding: 5px 5px 5px 5px;">';
									echo $line['qa_nome'];
									echo '</td>';
									echo '<td style="border: 1px solid #B0B0B0; padding: 5px 5px 5px 5px;">';
									echo $line['qa_email'];
									echo '</td>';
									echo '<td align="center" style="border: 1px solid #B0B0B0; padding: 5px 5px 5px 5px;">';
									echo '<a href="' . page() . '?dd21=DEL&dd22=' . $line['id_qa'] . '&dd23=' . checkpost($line['id_qa']) . '">';
									echo '<img src="img/icone_remove.png" height="16" border=0 >';
									echo '</a>';
									echo '</td>';
									echo '</td></tr>';
								}
								?>
							</table>
						</section>
						<BR>
						<BR>
						<section>
							<div class="dado-orientador">
								<div class="integrante">
									<h4>Integrantes (obrigatório)</h4>
									Nome <font color="red"><?php echo $erro['dd10'];?></font>
									<br />
									<input type="text" name="dd10" value="<?php echo $dd[10];?>">
									<br />
									Email <font color="red"><?php echo $erro['dd11'];?></font>
									<br />
									<input type="text" name="dd11" value="<?php echo $dd[11];?>">
									<br />
									Telefone <font color="red"><?php echo $erro['dd12'];?></font>
									<br />
									<input type="text" name="dd12" value="<?php echo $dd[12];?>">
									<br />
									<label for="cod_estados">Titulação <font color="red"><?php echo $erro['dd20'];?></font></label>
									<br />
									<select name="dd20" id="cod_titulacao">
										<option value="" >Titulação do integrante</option>
										<?
										$sql = "select * from apoio_titulacao where at_tit_ativo = 1 order by ap_ordem, ap_tit_titulo ";
										$rlt = db_query($sql);
										while ($line = db_read($rlt)) {
											$checked = '';
											if ($dd[20] == trim($line['ap_tit_codigo'])) { $checked = ' selected ';
											}
											echo '<option value="' . trim($line['ap_tit_codigo']) . '" ' . $checked . ' >' . $line['ap_tit_titulo'] . '</option>';
										}
										?>
									</select>
									<br />
									<br />
									<label for="cod_estados">Estado <font color="red"><?php echo $erro['dd13'];?></font></label>
									<br />
									<select name="dd13" id="cod_cidades">
										<option value="" >Escolha um estado</option>
										<?php
										$uf = array('Paraná', 'Santa Catarina', 'Rio Grande do Sul', 'São Paulo');
										for ($r = 0; $r < count($uf); $r++) {
											$check = '';
											if ($uf[$r] == $dd[13]) { $check = ' selected ';
											}
											echo '<option value="' . $uf[$r] . '" ' . $check . '>' . $uf[$r] . '</option>' . chr(13) . chr(10);
										}
										?>
									</select>
									<br />
									<label for="cod_cidades">Cidade <font color="red"><?php echo $erro['dd14'];?></font></label>
									<br />
									<input type="text" name="dd14" value="<?php echo $dd[14];?>">
									<br />
									<br />
									Instituição <font color="red"><?php echo $erro['dd15'];?></font>
									<br />
									<select name="dd15" id="cod_instituicao">
										<?php
										$sql = "select * from instituicao order by inst_nome ";
										$rlt = db_query($sql);
										while ($line = db_read($rlt)) {
											$check = '';
											if ($line['inst_codigo'] == $dd[15]) { $check = ' selected ';
											}
											echo '<option value="' . $line['inst_codigo'] . '" ' . $check . '>' . $line['inst_nome'] . '</option>' . chr(13) . chr(10);
										}
										?>
									</select>
									
									<br />
									Curso (Graduação, Pós-Graduação ou Especialização) <font color="red"><?php echo $erro['dd16'];?></font>
									<br />
									<input type="text" name="dd16" value="<?php echo $dd[16];?>">
									<br />
									Período <font color="red"><?php echo $erro['dd17'];?></font>
									<br />
									<input type="text" name="dd17" value="<?php echo $dd[17];?>">
									<br />
								</div>
								<input type="submit" name="acao" id="acao" value="Adicionar outro integrante +" class="add-integrante">
							</div>
						</section>
						<div class="nav-form">
							<input type="submit" name="acao" id="acao" value="Próximo" class="botao-prox">
						</div>
					</div>
				</article>
			</form>
			<?php
			require ('componentes/footer.php');
			?>
		</div>
		<!-- fecha div container -->
		<script src='js/scrollReveal.min.js'></script>
		<script>
			window.sr = new scrollReveal();

		</script>
	</body>
</html>