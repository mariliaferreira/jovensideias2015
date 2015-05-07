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
        
        <article data-sr='hustle 5%'>
            <h2>Inscrição</h2>        
            <div class="inscricao">
                <ul>
                    <li class="active"><a href="">Categoria</a></li>
                    <li>Sobre o Projeto</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>
                
                <div class="dados-inscricao-1">
                                                       
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
                    
                    <button>Anterior</button>
                    <button>Próximo</button>
                    
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