<?php
require ("db.php");
require("validar_formulario.php");
?>
<!DOCTYPE html>
<html>
	<?php
    require('componentes/cab.php');
	$_SESSION['proto'] = '';
	$proto = $dd[0];
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
		                    
		                    <?php
							$sql = "select * from submit_documento
									inner join sections on doc_sessao = section_id  
									where doc_id = '$proto' and doc_journal_id = '$jid' ";
							
							$rlt = db_query($sql);
							$line = db_read($rlt);
							$sta = array('@'=>'Em submissão','A'=>'Enviado','B'=>'Em análise');
							$protocolo = trim($line['doc_protocolo']);
							echo '<table width="100%">';
							echo '<tr><td align="right">Protocolo: </td><td>'.$line['doc_protocolo'].'</td></tr>';
							echo '<tr><td align="right">Título: </td><td>'.$line['doc_1_titulo'].'</td></tr>';
							echo '<tr><td align="right">Seção: </td><td>'.$line['title'].'</td></tr>';
							echo '<tr><td align="right">Seção: </td><td>'.$line['doc_2_titulo'].'</td></tr>';							
							echo '<tr><td align="right">Estado: </td><td>'.$sta[trim($line['doc_status'])];
							echo ' ('.trim($line['doc_status']).')</td></tr>';
							
							echo '</table>';
							?>
							<h3>Equipe</h3>
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<th width="5%">pos</th><th>Nome</th><th>e-mail</th>
								</tr>
								<?php
								$protocolo = trim($protocolo);
								$sql = "select * from submit_autores where qa_protocolo = '$protocolo' ";
								$rlt = db_query($sql);

								while ($line = db_read($rlt)) {
									echo '<tr>';
									echo '<td align="center" style="border: 1px solid #B0B0B0; padding: 5px 5px 5px 5px;">';
									echo $line['qa_ordem'];
									echo '<td style="border: 1px solid #B0B0B0; padding: 5px 5px 5px 5px;">';
									echo $line['qa_nome'];
									echo '</td>';
									echo '<td style="border: 1px solid #B0B0B0; padding: 5px 5px 5px 5px;">';
									echo $line['qa_email'];
									echo '</td>';
									echo '</td>';
									echo '</td></tr>';
								}
								?>
							</table>
                        </div>
                    </section>                    
               
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