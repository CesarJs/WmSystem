<footer class="rodape" id="rodape">
	
		 <img src="<?php echo $url;?>imagens/iconRodape.png" alt="Web Mestre" title="Otimização de Sites">
		<p>Este site foi desenvolvido seguindo normas W3C , e totalmente validado HTML5 e CSS3<br />
		por webmestre	| Criação e Otimização de Sites e Sistemas Guarulhos - SP |</p>
		<h1 style="display:none">Criação e Otimização de Sites e Sistemas Guarulhos - SP</h1>


      
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
			// $('#menu').css({'display':'none'});
			 $('#menu').fadeOut(50);
			//$('.topo').fadeOut(50);
		    //$('#topo').css({'height' : ': 3px'});
		    //$('.menuEsq').css({'opacity':'1.0','display' : 'block','top':'0','left':'0','height':'2em', 'margin-top' : '0'});
		    //$('.topo').css({'display':'none','opacity':'0.90','height':'1.5em','top':'0','border-bottom':'2px outset black'});
		    //$('.topo nav').css({'position':'absolute','float':'left','margin-left':'5%'});

		}else if(scrollTop < (20)){
		document.getElementById('menuEsq').id = 'topo';

		 $('#menu').css({'display':'block'});
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
} 
		function mostraMenu(){
			cam=document.getElementById('menu');
	if(cam.style.display=='block'){
		//cam.style.display='none';
		$('#menu').fadeOut(500);

	}else{
		$('#menu').fadeIn(250);
		//cam.style.display='block';
	}
			
}
</script>
</body>
</html>