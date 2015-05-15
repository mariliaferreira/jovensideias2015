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
                            <li><span>15</span><br /> de Maio</li>
                            <li><b>Lançamento do Edital</b></li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 0.5s, hustle 5%'>
                        <ul>
                            <li><span>30</span><br /> de Maio</li>
                            <li><b>Início</b> das inscrições</li>
                        </ul>
                    </li>
                                    
                    <li data-sr='wait 0.6s, hustle 5%'>
                        <ul>
                            <li><span>27</span><br /> de Julho</li>
                            <li><b>Prazo Final</b> das inscrições</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 0.8s, hustle 5%'>
                        <ul>
                            <li><span>03</span><br /> de Agosto</li>
                            <li><b>Avaliação das Propostas</b> 03 à 07 de Agosto.</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1s, hustle 5%'>
                        <ul>
                            <li><span>12</span><br /> de Agosto</li>
                            <li>Divulgação dos selecionados.</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1s, hustle 5%'>
                        <ul>
                            <li><span>_</span><br /> de _</li>
                            <li>Reunião presencial obrigatória (selecionados Curitiba)</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1s, hustle 5%'>
                        <ul>
                            <li><span>_</span><br /> de _</li>
                            <li>Reunião através de Skype obrigatória (selecionados de outras cidades)</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1s, hustle 5%'>
                        <ul>
                            <li><span>05</span><br /> de Outubro</li>
                            <li>Montagem dos projetos</li>
                        </ul>
                    </li>
                    
                    <li data-sr='wait 1.2s, hustle 5%'>
                        <ul>
                            <li><span>06</span><br /> de Outubro</li>
                            <li><b>06, 07 e 08 de Outubro: Exposição</b> do projeto no SEMIC.</li>
                        </ul>
                    </li>
                    
                    
                    
                    <li data-sr='wait 1.2s, hustle 5%'>
                        <ul>
                            <li><span>08</span><br /> de Outubro</li>
                            <li><b>Resultado</b> e premiação no SEMIC.</li>
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