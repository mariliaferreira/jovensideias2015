<?php
require ("db.php");
require($include.'_class_windows.php');
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
			$pag = 4;
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
								<a href="inscricao-passo2.php">Sobre o Projeto</a>
							</li>
							<li>
								<a href="inscricao-passo3.php">Equipe</a>
							</li>
							<li class="active">
								<a href="inscricao-passo4.php">Arquivos</a>
							</li>
							<li>
								<a href="inscricao-passo5.php">Confirmar</a>
							</li>
						</ul>
					</div>
					<div class="dados-inscricao-2">
						</section>
						<section>
							<h3>Preencha as informações sobre o projeto:</h3>
							PDF do Projeto (anexar)
							<br />
							<?php
							require("_ged_submit_files.php");
							$ged->protocol = $_SESSION['protocolo'];
							$ged->file_delete();
							echo $ged -> file_list();
							echo '<br/>';
							echo $ged -> upload_botton_with_type($ged->protocol,'','PRJ');
							?>
							<br />
							<br />
					</div>
					</section>
					<div class="nav-form">
						<input type="submit" name="acao" id="acao" value="Próximo" class="botao-prox">
					</div>
		</div>
		</article>
		</form> <?php
		require ('componentes/footer.php');
		?>

		</div> <!-- fecha div container -->
		<script src='js/scrollReveal.min.js'></script>
		<script>
			window.sr = new scrollReveal();

		</script>
	</body>
</html>