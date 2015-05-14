<?php
require ("db.php");
?>
<!DOCTYPE html>
<html>
	<?php
    require('componentes/cab.php');
?>
	
    <body>
        
    <div class="container">
        
        <?php
        require('componentes/nav.php');
		
		/* Valida formulario */
		$pag = 2;
		require("validar_formulario.php");		
        ?>
        
        <article>
            <h2>Inscrição</h2>        
            <div class="inscricao">
                <ul>
                    <li><a href="inscricao.php">Categoria</a></li>
                    <li class="active"><a href="inscricao-passo2.php">Sobre o Projeto</a></li>
                    <li><a href="inscricao-passo3.php">Equipe</a></li>
                    <li><a href="inscricao-passo4.php">Confirmar</a></li>
                </ul>
            </div>
                
                <div class="dados-inscricao-2">                           
                    
                <section>
                    <div class="dado-orientador">
                        Nome do Orientador<br /> <input type="text" name="dd1" value="<?php echo $dd[1];?>"><br /><br />
                        Email do Orientador<br /> <input type="text" name="dd2" value="<?php echo $dd[2];?>"><br /><br />
                    </div>

                    <div>
                        Qual a categoria do seu projeto?<br />

                        <input type="radio" name="dd3" id="pibic" value="1" <?php echo $check[1];?>> PIBIC <br />

                        <input type="radio" name="dd3" id="pibicjr" value="2" <?php echo $check[2];?>> PIBIC Jr <br />

                        <input type="radio" name="dd3" id="pibicjr" value="3" <?php echo $check[3];?>> PIBITI <br />

                        <input type="radio" name="dd3" id="pibicjr" value="4" <?php echo $check[4];?>> TCC <br />

                        <input type="radio" name="dd3" id="pibicjr" value="5" <?php echo $check[5];?>> Dissertação <br />

                        <input type="radio" name="dd3" id="pibicjr" value="6" <?php echo $check[6];?>> Tese <br />

                        <input type="radio" name="dd3" id="pibicjr" value="7" <?php echo $check[7];?>> Outro (Olimpíada de Matemática, de Ciências, etc). <br />
                        <input type="text" name="dd4" placeholder="Qual?" value="<?php echo $dd[4];?>" class="input-campo"/> <br />

                    </div>
		</section>

		<section>
			<h3>Preencha as informações sobre o projeto:</h3>
            <div class="dado-orientador">
            
			Título do Projeto <br /><textarea name="dd4" cols=80 rows=4><?php echo $dd[4];?></textarea><br /><br />
			
			Link do video <br /><input type="text" name="dd6" value="<?php echo $dd[6];?>"><br /><br />
			PDF do Projeto (anexar) <br />
			<?php
			echo $ged->file_list();
			echo $ged->upload_botton_with_type();
			?>
			<br /><br />
            </div>
		</section>
                    
                    
                    <div class="nav-form">
                        <input type="submit" name="acao" id="acao" value="Próximo"/>
                    </div>
                </div>            
        </article>
                
        <?php
        require('componentes/footer.php');
        ?>
        
    </div> <!-- fecha div container -->
    
    <script src='js/scrollReveal.min.js'></script>
    <script>

      window.sr = new scrollReveal();

    </script>    
        
	</body>
</html>