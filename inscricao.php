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
			$pag = 1;
			require("validar_formulario.php");			
			
			?>
			<form action="<?php page();?>" method="post">
			<article>
				<h2>Inscrição</h2>
				<div class="inscricao">
                <ul>
                    <li class="active"><a href="inscricao.php">Categoria</a></li>
                    <li><a href="inscricao-passo2.php">Sobre o Projeto</a></li>
                    <li><a href="inscricao-passo3.php">Equipe</a></li>
                    <li><a href="inscricao-passo4.php">Arquivos</a></li>
                    <li><a href="inscricao-passo5.php">Confirmar</a></li>
                </ul>
				</div>
				<div class="dados-inscricao-1" style="background-color: #f0f0f0;">
					<!--- definir estilo --->
                    
                    <div class="dado-orientadorf" style="margin-left: 90px; padding-top: 60px;">
                        Informe seu CPF<br /> <input type="text" name="dd1" id="dd1" value="<?php echo $dd[1];?>" style="width: 150px;"><br />
                        <?php
                        if (strlen($erros) > 0)
							{
								echo '<div id="erro1" class="erro"><i class="fa fa-exclamation-triangle"></i>'.$erros .' </div>';
							}
						?>
                        
                    </div> 
                    
                    
					
					<ul>
						<li>
							<input type="radio" name="dd2" id="dd2" value="1011" <?php echo $checked[1011];?>>
							<label for="sem-orientacao"><span>PUC Jovens Ideias</span> - Sou estudante de graduação ou pós-graduação e meu projeto <strong>não tem</strong> orienção de Professor/Mentor.</label>
						</li>
						<li>
							<input type="radio" name="dd2" id="dd2" value="1012" <?php echo $checked[1012];?>>
							<label for="com-orientacao"><span>Espaço Pesquisar é Evoluir</span> - Sou estudante de graduação ou pós-graduação e meu projeto <strong>tem orientação</strong> de Professor/Mentor (TCC, PIBIC, PIBITI, monografia, dissertação de mestrado, tese de doutorado, etc).</label>
						</li>
						<li>
							<input type="radio" name="dd2" id="dd2" value="1013" <?php echo $checked[1013];?>>
							<label for="com-orientacao"><span>PUC Jovens Ideias Junior</span> - Sou estudante do <strong>Ensino Médio</strong> e meu projeto <strong>tem</strong> orientação de Professor/Mentor.</label>
						</li>
					</ul>
					
                    					
					
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
			jQuery("#dd1").mask("999.999.999-99");
		</script>
	</body>
</html>