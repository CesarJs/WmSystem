<?php 
	include"includes/globais.php";
    include"includes/head.php";
 ?>
</head>
<body>

	<?php include "includes/topo.php";?>
		
	<section class="centralizar" >
	<h1 class="tituloSection">SEO e outros serviços</h1>
			<section class="esquerdo">
			<?php  if(isset($_GET['enviado'])){
                echo '<div class="alert alert-success" role="alert">Email Enviado com Suecesso!</div>';
                
            }else if(isset($_GET['ermail'])){
                echo '<div class="alert alert-warning" role="alert">Aconteceu um problema no envio do Email!!<br /> Tente novamente.</div>';
            }else if(isset($_GET['cap'])){
                echo '<div class="alert alert-danger" role="alert">Por favor faça a captcha...</div>';
            }
        
        ?>
				<header><h2>Preencha o Fomrulário Abaixo</h2></header>
					<article>
					<h3><?php if(isset($_GET['assunto'])){ echo str_replace("-", " ", $_GET['assunto'])." - Formulário";}else{echo "Formulario de contato";}?></h3>
						<form class="form-horizontal"  method="post" action="<?php echo $url;?>email/index.php">
							<fieldset>

							

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="nome">Nome:</label>  
							  <div class="col-md-6">
							  <input id="nome" name="nome" placeholder="Digite seu nome" class="form-control input-md" required="" type="text">
							    
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">email</label>  
							  <div class="col-md-6">
							  <input id="textinput" name="email" placeholder="Digite seu email" class="form-control input-md" type="text">
							    
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="assunto">Assunto</label>  
							  <div class="col-md-4">
							  <input id="assunto" name="assunto"  placeholder="Digite aqui o assunto" <?php if(isset($_GET['assunto'])){echo "value='".str_replace("-", " ", $_GET['assunto'])."'";} ?> class="form-control input-md" type="text">
							    
							  </div>
							</div>

							<!-- Textarea -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
							  <div class="col-md-4">                     
							    <textarea class="form-control" id="mensagem" name="mensagem">Sua mensagem.</textarea>
							  </div>
							</div>
							<div class="form-group">
                              <label class="col-md-4 control-label" for="mensagem">Captcha</label>
                              <div class="col-md-4">                     
                                <div class="g-recaptcha" data-theme="light" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LevCBwTAAAAAHb17x1zugEZwYESuSZcBR-jLbmf"></div>
                              </div>
                            </div>
							<!-- Button (Double) -->
							<div class="form-group">
							 
							  <div class="col-md-8">
							    <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
							    <button id="cancelar" type="reset" name="cancelar" class="btn btn-danger">Limpar</button>
							  </div>
							</div>

							</fieldset>
							</form>


					</article>
				<footer>
						<script src='https://www.google.com/recaptcha/api.js'></script>
				</footer>
</section>
</section>
	<?php 
        include "includes/footer.php";
    ?>