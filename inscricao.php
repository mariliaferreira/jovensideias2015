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
			?>
			<form action="<?php page();?>" method="post">
			<article>
				<h2>Inscrição</h2>
				<div class="inscricao">
					<ul>
						<li class="active">
							<a href="inscricao.php">Categoria</a>
						</li>
						<li>
							<a href="inscricao-passo2.php">Sobre o Projeto</a>
						</li>
						<li>
							<a href="inscricao-passo3.php">Equipe</a>
						</li>
						<li>
							<a href="inscricao-passo4.php">Confirmar</a>
						</li>
					</ul>
				</div>
				<div class="dados-inscricao-1">
					<!--- definir estilo --->
					<div id="erro1" style="color: red;">Informe a categoria de submissão</div>
					
					<ul>
						<li>
							<input type="radio" name="categoria-inscricao" id="jovens-ideias" value="one">
							<label for="sem-orientacao"><span>PUC Jovens Ideias</span> - Sou estudante de graduação ou pós-graduação e meu projeto <strong>não tem</strong> orientação de Professor/Mentor.</label>
						</li>
						<li>
							<input type="radio" name="categoria-inscricao" id="pesquisar-evoluir" value="two">
							<label for="com-orientacao"><span>Espaço Pesquisar é Evoluir</span> - Sou estudante de graduação ou pós-graduação e meu projeto <strong>tem orientação</strong> de Professor/Mentor (TCC, PIBIC, PIBITI, monografia, dissertação de mestrado, tese de doutorado, etc).</label>
						</li>
						<li>
							<input type="radio" name="categoria-inscricao" id="jovens-ideias-junior" value="three">
							<label for="com-orientacao"><span>PUC Jovens Ideias Junior</span> - Sou estudante do <strong>Ensino Médio</strong> e meu projeto <strong>tem</strong> orientação de Professor/Mentor.</label>
						</li>
					</ul>
					
                    <div class="dado-orientador">
                        Informe seu CPF<br /> <input type="text" name="dd1" id="dd1" value="" style="width: 150px;"><br /><br />
                    </div>					
					
					<div class="nav-form">
						<input type="submit" name="acao" id="acao" value="Próximo">
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
			jQuery("#dd1").mask("999.999.999-99");
		</script>
	</body>
</html>