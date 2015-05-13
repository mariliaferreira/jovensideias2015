<!DOCTYPE html>
<html>
	<?php
    require('componentes/cab.php');
?>
	
    <body>
        
    <div class="container">
        
        <?php
        require('componentes/nav.php');
        ?>
        
        <article>
            <h2>Inscrição</h2>        
            <div class="inscricao">
                <ul>
                    <li><a href="inscricao.php">Categoria</a></li>
                    <li><a href="inscricao-passo2.php">Sobre o Projeto</a></li>
                    <li><a href="inscricao-passo3.php">Equipe</a></li>
                    <li class="active"><a href="inscricao-passo4.php">Confirmar</a></li>
                </ul>
            </div>
                
                <div class="dados-inscricao-2">                           
                    
                    <section>
                        <div>

                            <input type="checkbox" name="vehicle" value="Bike"> Afirmo que as informações que utilizei no formulário são verdadeiras e concordo sumaria e plenamente com o disposto no Regulamento do Concurso Jovens Ideias 2015<br /><br />

                        </div>
                    </section>

                    
                    
                    <div class="nav-form">
                        <button>Voltar</button>
                        <button>Finalizar Inscrição</button>
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