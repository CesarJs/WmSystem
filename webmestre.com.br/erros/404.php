<?php 
	include"../includes/globais.php";
	$nomePdt="Ooops...";
    include"../includes/head.php";
 ?>
 
</head>


	<?php
    include "../includes/topo.php";
    ?>
	<section class="centro">
	
	<h1 class="tituloSection"> Ooops...</h1>
			<section class="contato">
				<header><h2>Nos desculpe</h2></header>
					<article>
                        <h3>Página não encontrada</h3>
						<br />
						<div class="sobrepor"> <p>Caso queira entrar em contato,<br />Telefones: 11 2402-2483 / 11 2088-0268<br />
						<a href="<?php echo $url;?>">Home</a> - <a href="<?php echo $url; ?>contato/">Contato</a> - <a href="<?php echo $url; ?>produtos/">Produtos</a> - <a href="<?php echo $url; ?>servicos/">Serviços</a></p><img class="ladoDir" src="<?php echo $url; ?>imagens/404.png" alt="WebMestre" title="WebMestre"/>

						
						</div>
						
					</article>
					
					
				<footer>
						
				</footer>
			</section>
			
			
			
	</section>


<footer class="rodape" id="rodape">
	
		
	</footer>
	
	
		<script src="<?php echo $url; ?>js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $url; ?>js/jquery.slicknav.js"></script>
		

		<script>
			$(function(){
				$('#menu').slicknav();

			});

		</script>
	<script type="text/javascript">
		$(function() {
		$(window).scroll(function()
		{
		var topo = $('#topo').height(); // altura do topo
		var rodape = $('#rodape').height(); // altura do rodape
		var scrollTop = $(window).scrollTop(); // qto foi rolado a barra
		var tamPagina = $(document).height(); // altura da página
		var vl1 = $(this).scrollTop();
		var vl2 = $(this).height()
		
			 
		if(scrollTop > (tamPagina/10)){
			document.getElementById('topo').id = 'menuEsq';
			//$('.topo').fadeOut(50);
		    //$('#topo').css({'height' : ': 3px'});
		    //$('.menuEsq').css({'opacity':'1.0','display' : 'block','top':'0','left':'0','height':'2em', 'margin-top' : '0'});
		    //$('.topo').css({'display':'none','opacity':'0.90','height':'1.5em','top':'0','border-bottom':'2px outset black'});
		    //$('.topo nav').css({'position':'absolute','float':'left','margin-left':'5%'});

		}else if(scrollTop < (20)){
		document.getElementById('menuEsq').id = 'topo';
		  //$('#logo').css({'display' : 'none'});
		  //$('.menuEsq').css({'display' : 'none'});
		 // $('.topo').css({'display':'block','opacity':'1','height':'5.5em','top':'0','border-bottom':'none'});
		  //$('.topo nav').css({'position':'fixed'});
		  //$('.logo').fadeIn();
		}


		             
		});
});
		function Nova(assunto,num){
			if (num==0) {
			location.href="contato.php?assunto="+assunto;
		}else{
			location.href=assunto;
		}
//window.open("contato.php?assunto="+assunto,"contato");
} 
</script>
</body>
</html>