<?php 
	/*include("conect.php");

	$SQL = "SELECT * FROM dados_empresa";
	$RS = mysql_query($SQL);
	$dadosEmpresa= mysql_fetch_array($RS,MYSQL_ASSOC);

	$SQL = "SELECT * FROM menu";
    $dadosMenu = mysql_query($SQL);

    $SQL = "SELECT * FROM conteudo ORDER BY id_conteudo DESC/*WHERE tipo_ctu=1";
    $conteudo = mysql_query($SQL);

    mysql_close();
*/

    function lerArq ($local , $tipo){
	//$arquivo="conteudos/nomeEmpresa.txt";
				$abrir= fopen($local, "r");
				$ler = fread($abrir, filesize($local));
				fclose($abrir);
			
				if($tipo==1){
				echo "value=\"".$ler."\"";
				}else if($tipo==2){
					echo "$ler";
				}elseif($tipo==5){
					//$numero=$ler;
					return $ler;

				}else{
					echo "alt=\"$ler\"";
				}
}

//Define nome da empresa

	$emailEmpresa=lerArq("conteudos/emailEmpresa.txt",5);
    




//cria div de conteudo
	$conteudoSup="";
	//$configSup="";
	$conteudoInf="";
	//$configInf="";
//conteudo principal superior


		$dir = "conteudos/paginas/";
		$cont=1;
		$contInf=1;
		if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {

        	$arquivo="$dir/$file";
        	 if(is_file($arquivo)){
				$abrir= fopen($arquivo, "r");
				$ler = fread($abrir, filesize($arquivo));
				fclose($abrir);
			
				//echo $ler;
				$dadosPagina = unserialize($ler);
				
				if($dadosPagina['ctuinicial'] =="on" && $cont <=3 && $dadosPagina['status']=="on"){
				$conteudoSup="";
				if($dadosPagina['imagem']=="imagens/paginas/"){$dadosPagina['imagem']="imagens/paginas/sem-foto.jpg";}
				$parteNoticia=substr($dadosPagina['conteudo'], 0,220)."...";
				$conteudoSup.="<a href=\"paginas.php?id=".$dadosPagina['id']."\">";
				$conteudoSup.="<div class=\"destaques\">\n";
				$conteudoSup.="<img src=\"".$dadosPagina['imagem']."\" alt=\"".$dadosPagina['nomePagina']."\">";
				$conteudoSup.="<h3>".substr($dadosPagina["nomePagina"],0,27)."...</h3>\n";
				$conteudoSup.="<hr />";
				$conteudoSup.="<p>".$parteNoticia."</p>";
				$conteudoSup.="";
				$conteudoSup.="";
				$conteudoSup.="</div>\n </a>               ";
				$newSup[]=$conteudoSup;
				$cont++;
				

			}elseif($contInf<=3 && $dadosPagina['status']=="on"){
				$conteudoInf="";
				$parteNoticia=substr($dadosPagina['conteudo'], 0,180)."...";
				$conteudoInf.="<a href=\"paginas.php?id=".$dadosPagina['id']."\">";
				$conteudoInf.="<div class=\"destaqueInferior\">";
				$conteudoInf.="<h4>".substr($dadosPagina["nomePagina"], 0,22)."...</h4>\n";
				$conteudoInf.="<hr />";
				$conteudoInf.="<p>".$parteNoticia."</p>";
				$conteudoInf.="";
				$conteudoInf.="</div>\n                </a>";
				$contInf++;

				$newInf[]=$conteudoInf;


			}
				
			}

        }
        closedir($dh);
    }
}
	
	$rcb = $conteudoSup;
	$dir = "conteudos";
	$criar = fopen("$dir/conteudoSup.txt", "w");
	fwrite($criar, $rcb);
	fclose($criar);

	$rcb = $conteudoInf;
	$criar = fopen("$dir/conteudoInf.txt", "w");
	fwrite($criar, $rcb);
	fclose($criar);
	/*w: write. cria um arquivo e coloca o pontero no incio 'zera
	  r: read. lê o arquivo 
	  a: addciona. cria o arquivo e o ponteiro no fim 'escreve no fim*/
//conteudo principal inferior



?>