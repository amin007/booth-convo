<!-- untuk javaskrip sahaja bawah ini_get
///////////////////////////////////////////////////////////////////// -->
<script type="application/x-javascript">
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo $url ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $url ?>js/bootstrap.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
</body>	
</html>