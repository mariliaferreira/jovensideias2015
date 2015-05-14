<?php
require ("db.php");
?>
<!DOCTYPE html>
<html>
	<?php
    require('componentes/cab.php');
	$_SESSION['proto'] = '';
?>
	
    <body>
        
    <div class="container">
        
        <?php
        require('componentes/nav.php');
        ?>
        
        <article>
            <h2>Resumo da Inscrição</h2>        
            <div class="inscricao">
                <ul>
                    <li><a href="#">Categoria</a></li>
                </ul>
            </div>
                
                <div class="dados-inscricao-2">                           
                    
                    <section>
                        <div>
		                    RESUMO DO PROJETO

                        </div>
                    </section>

                    
                    
                    <div class="nav-form">
                        <button>Voltar</button>
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