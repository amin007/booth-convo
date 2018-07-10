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
<script src="<?php echo $url ?>js/responsiveslides.min.js"></script>
<script>// You can also use "$(window).load(function() {"
$(function () {// Slideshow 4
	$("#slider4").responsiveSlides({
		auto: true,
		pager:true,
		nav:false,
		speed: 500,
		namespace: "callbacks",
		before: function () { $('.events').append("<li>before event fired.</li>"); },
		after:  function () { $('.events').append("<li>after event fired. </li>"); }
	});
});
</script>
<script src="<?php echo $url ?>js/jzBox.js"></script>
</body>	
</html>