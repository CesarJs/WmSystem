
<link href="<?php echo $url; ?>css/slicknav.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $url; ?>js/jquery.slicknav.js"></script>
<script type="text/javascript">


$(document).ready(function(){
    $('.menu').slicknav();
});
$(document).ready(function() {
			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.go-top').fadeIn(200);
				} else {
					$('.go-top').fadeOut(200);
				}
			});

			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();

				$('html, body').animate({scrollTop: 0}, 300);
			})
		});
</script>