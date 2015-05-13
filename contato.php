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
        
        <article data-sr='hustle 5%' class="contato">
            <h2>Contato</h2>
            
            <ul>
                <li>jovensideias@pucpr.br</li>
                <li>+55 (41) 3271-2112   |   3271-1602   |   3271-1165</li>
                <li>Pontifícia Universidade Católica do Paraná</li>
                <li>Coordenação de Iniciação Científica</li>
            </ul>
        
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