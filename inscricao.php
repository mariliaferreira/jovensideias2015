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
                <div>
                    <div>Categoria</div>
                    <div>Sobre o Projeto</div>
                    <div>3</div>
                    <div>4</div>
                </div>
                
                
                <div>
                    <h3>Informações do Projeto</h3>
                    
                    <h4>Qual das categorias você se encaixa?</h4>
                    
                    <form>
                        <input type="radio" name="categoria-inscricao" id="jovens-ideias" value="one">
                        <label for="sem-orientacao"><strong>PUC Jovens Ideias:</strong> Sou estudante de graduação ou pós-graduação e meu projeto <strong>não tem</strong> orientação de Professor/Mentor.</label><br /> <br />
                        <input type="radio" name="categoria-inscricao" id="pesquisar-evoluir" value="two">
                        <label for="com-orientacao"><strong>Espaço Pesquisar é Evoluir</strong>: Sou estudante de graduação ou pós-graduação e meu projeto <strong>tem orientação</strong> de Professor/Mentor (TCC, PIBIC, PIBITI, monografia, dissertação de mestrado, tese de doutorado, etc).</label> <br /><br />
                        <input type="radio" name="categoria-inscricao" id="jovens-ideias-junior" value="three">
                        <label for="com-orientacao"><strong>PUC Jovens Ideias Junior:</strong> Sou estudante do <strong>Ensino Médio</strong> e meu projeto <strong>tem</strong> orientação de Professor/Mentor.</label> <br /><br />
                    </form>
                    
                </div>
                
            </div>
            
            http://simplesideias.com.br/usando-css3-para-formatar-radio-buttons
           
            
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