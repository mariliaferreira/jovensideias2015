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
                    <li class="active"><a href="inscricao-passo2.php">Sobre o Projeto</a></li>
                    <li><a href="inscricao-passo3.php">Equipe</a></li>
                    <li><a href="inscricao-passo4.php">Confirmar</a></li>
                </ul>
            </div>
                
                <div class="dados-inscricao-2">                           
                    
                <section>
                    <div class="dado-orientador">
                        Nome do Orientador<br /> <input type="text" name="FirstName" value=""><br /><br />
                        Email do Orientador<br /> <input type="text" name="FirstName" value=""><br /><br />
                    </div>

                    <div>
                        Qual a categoria do seu projeto?<br />

                        <input type="radio" name="categoriaprojeto" id="pibic" value="one"> PIBIC <br />

                        <input type="radio" name="categoriaprojeto" id="pibicjr" value="one"> PIBIC Jr <br />

                        <input type="radio" name="categoriaprojeto" id="pibicjr" value="one"> PIBITI <br />

                        <input type="radio" name="categoriaprojeto" id="pibicjr" value="one"> TCC <br />

                        <input type="radio" name="categoriaprojeto" id="pibicjr" value="one"> Dissertação <br />

                        <input type="radio" name="categoriaprojeto" id="pibicjr" value="one"> Tese <br />

                        <input type="radio" name="categoriaprojeto" id="pibicjr" value="one"> Outro (Olimpíada de Matemática, de Ciências, etc). <br />
                        <input type="text" placeholder="Qual?" class="input-campo"/> <br />

                    </div>
		</section>

		<section>
			<h3>Preencha as informações sobre o projeto:</h3>
            <div class="dado-orientador">
            
			Título do Projeto <br /><input type="text" name="FirstName" value=""><br /><br />
			PDF do Projeto (anexar) <br /><input type="text" name="FirstName" value=""><br /><br />
			Link do video <br /><input type="text" name="FirstName" value=""><br /><br />
            </div>
		</section>
                    
                    
                    <div class="nav-form">
                        <button>Voltar</button>
                        <button>Próximo</button>
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