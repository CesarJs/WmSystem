
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
	<title><?php if(isset($nomePag)){echo $nomePag." - ".$nomeSite;}else{echo $nomeSite;}?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- SEO meta tags -->
	<meta name="Revisit-After" content="7 days" />
    <meta name="distribution" content="Global" />
	<meta name="googlebot" content="index,follow" />
	<meta name="robots" content="index,follow" />


	<meta name="description" content="<?php if (isset($nomePdt)) {echo substr($descricaoPdt , 0,155);}else{ echo $descricaoEmp;} ?>" />
	<meta name="keywords" content="<?php if (isset($nomePdt)) {echo $nomePdt;}else{ echo "Otimização de Sites Guarulhos";} ?>" />
	<link rel="canonical" href="<?php echo $urlCanonical;?>" />

	<meta property="publisher" content="www.webmaster.com.br" />
	<meta name="robots" content="<?php echo $robots;?>" />
	<link rel="shortcut icon" href="<?php echo $url;?>imagens/favicon.png" />


	<meta property="og:type" content="website" />
	<meta property="og:locale" content="pt_BR" />
	<meta name="city" content="Guarulhos" />
	<meta property="og:region" content="Brasil" />
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<meta property="og:title" content="<?php if (isset($nomePdt)) {echo $nomePdt;}else{ echo "SEO - Guarulhos";} ?> - <?php echo $nomeSite?>" />
	<meta property="og:author" content="<?php echo $nomeSite?>" />
	<meta name="language" content="Portuguese" />
    <meta name="Copyright" content="Fabricando Web" />
    <meta name="Publisher" content="Owner" />
	<meta property="og:image" content="<?php echo $url?><?php echo $arquivos?>exaustor.png" />
	<meta property="og:url" content="<?php echo $urlCanonical;?>" />
	<meta property="og:description" content="<?php if (isset($nomePdt)) {echo substr($descricaoPdt , 0,155);}else{ echo $descricaoEmp;}?>" />
	<meta property="og:site_name" content="<?php echo $nomeSite?>" />
	<meta property="fb:admins" content="<?php echo $idFacebook?>" />
	
	
	<link rel="stylesheet" href="<?php echo $url; ?>css/css/bootstrap2.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $url; ?>css/estilo.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $url; ?>css/slicknav.css" type="text/css">
	
	<!--[if lt IE 9]>
            <link rel="shortcut icon" href="favicon/favicon.ico">
        <![endif]-->
	<!--[if lt IE 9]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->