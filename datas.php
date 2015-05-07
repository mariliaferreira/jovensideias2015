<?php
    require('componentes/force-utf8.php');
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
        ?>
        
        <article style="background-color: #f6f6f6;">
            <h2>Datas Importantes</h2>
            
            <div class="calendario">
                <ul>
                    <li data-sr='hustle 5%'>
                        <ul>
                            <li><span>12</span><br /> de Maio</li>
                            <li><b>Palestra de abertura</b><br /> Lançamento do Edital<br /> Local: Auditório<br /><br /><b>Início</b> das inscrições através do site</li>
                        </ul>
                    </li>
                    
                                    
                    <li data-sr='wait 0.5s, hustle 5%'>
                        <ul>
                            <li><span>27</span><br /> de Julho</li>
                            <li><b>Prazo Final</b> das inscrições</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 0.8s, hustle 5%'>
                        <ul>
                            <li><span>12</span><br /> de Agosto</li>
                            <li><b>Resultado Parcial</b> com os 10 melhores projetos.</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1s, hustle 5%'>
                        <ul>
                            <li><span>06</span><br /> de Outubro</li>
                            <li><b>Apresentação</b> dos 10 melhores projetos no SEMIC.</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1.2s, hustle 5%'>
                        <ul>
                            <li><span>07</span><br /> de Outubro</li>
                            <li><b>Apresentação</b> dos 10 melhores projetos no SEMIC.</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1.2s, hustle 5%'>
                        <ul>
                            <li><span>09</span><br /> de Outubro</li>
                            <li><b>Resultado</b> final.</li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            
        <div style="clear: both;"></div>
            
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