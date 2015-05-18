<!DOCTYPE html>
<html>
    
    <?php
    require('componentes/cab.php');
?>
	
	<!--Pagina home -->
    <body>
        
    <div class="container">
        
        <?php
        require('componentes/nav.php');
        ?>
        
        <div class="nome-concurso" data-sr='hustle 10%'>
            <span>Concurso<br /></span>
            <span>PUC<br /> Jovens<br /> Ideias<br /> 2015</span><br />
            <span>Inscrições de 1 à 30 de Junho.</span>
        </div>
        
        <div class="tema-concurso" data-sr='hustle 10%'>
            <span>O que você criaria se não tivesse medo?</span>
            <br /><br /><br /><a href="sobre.php" class="botao-call-action">Descubra como participar <i class="fa fa-angle-right"></i></a>
        </div>
        
        <div style="clear: both;"></div>
        
        <?php
        require('componentes/footer.php');
        ?>
        
        
    </div><!-- fecha div container -->

	</body>
    
    <script src='js/scrollReveal.min.js'></script>
    <script>

      window.sr = new scrollReveal();

    </script>
</html>


