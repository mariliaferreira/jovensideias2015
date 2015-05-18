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
		$pag = 5;
		require("validar_formulario.php");
				
        ?>
        <form action="<?php page();?>" method="post">
        <article>
            <h2>Inscrição</h2>        
            <div class="inscricao">
                <ul>
                    <li><a href="inscricao.php">Categoria</a></li>
                    <li><a href="inscricao-passo2.php">Sobre o Projeto</a></li>
                    <li><a href="inscricao-passo3.php">Equipe</a></li>
                    <li><a href="inscricao-passo4.php">Arquivos</a></li>
                    <li class="active"><a href="inscricao-passo5.php">Confirmar</a></li>
                </ul>
            </div>
                
                <div class="dados-inscricao-2">                           
                    
                    <section>
                        <div>

                            <input type="checkbox" name="dd1" value="1"> Afirmo que as informações que utilizei no formulário são verdadeiras e concordo sumaria e plenamente com o disposto no Regulamento do Concurso Jovens Ideias 2015<br /><br />

                        </div>
                    </section>

                    
                    
                    <div class="nav-form">
                        <input type="submit" name="acao" id="acao" value="Finalizar Inscrição" class="botao-prox">
                        
                    </div>
                </div>            
        </article>
        </form>   
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