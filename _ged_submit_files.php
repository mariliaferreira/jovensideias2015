<?
/* ged */
require_once("_class/_class_ged.php");
$ged = new ged;
$path = $_SERVER['SCRIPT_FILENAME'];
$path = troca($path,page(),'').'../../submissao/public/submit/';
$ged_up_path = $path; 
$ged_up_maxsize = 1024 * 1024 * 10; /* 10 Mega */
$ged_up_format = array('*');
$ged_up_month_control = 1; 
$ged_up_doc_type = $tipo;
$ged_del = 'delete';
$ged_tabela = 'submit_files';

//if (($tipo == 'RELAP') or ($tipo == 'RELPC'))
	{
		/* Relatorio Parcial */
		$ged_up_format = array('.pdf');
	}
	
$ged = new ged;
$ged->tabela = $ged_tabela;


//$ged->insert();

$ged->up_maxsize = $ged_up_maxsize;
$ged->up_path = $ged_up_path; 
$ged->up_format = $ged_up_format;
$ged->up_month_control = $ged_up_month_control; 
$ged->up_doc_type = $ged_up_doc_type;
$ged->tabela = $ged_tabela;		
$ged->protocol = $proto;	
$ged->http_link = 'eventos/jovensideias2015/';


function msg($x) {
	switch ($x)
		{
		case 'file_name': $x = 'Tipo do arquivo'; break;
		case 'file_filename': $x = 'Nome do arquivo'; break;
		case 'file_size': $x = 'Tamanho'; break;
		case 'file_data': $x = 'Data de submissão'; break;
		case 'not_file_posted': $x = 'Nenhum arquivo postado'; break;
		}	
	return($x); 

}
?>