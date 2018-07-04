<!-- //footer -->
<script src="<?php echo $url ?>js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {// Slideshow 4
	$("#slider4").responsiveSlides({
		auto: true,
		pager:true,
		nav:false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	});
});
</script>
<!--banner Slider starts Here-->
<script src="<?php echo $url ?>js/responsiveslides.min.js"></script>
<script src="<?php echo $url ?>js/jarallax.js"></script>
<script src="<?php echo $url ?>js/SmoothScroll.min.js"></script>
<script type="text/javascript">
/* init Jarallax */
$('.jarallax').jarallax({
	speed: 0.5,
	imgWidth: 1366,
	imgHeight: 768
	})
</script>
<script type="text/javascript" src="<?php echo $url ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $url ?>js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
$(document).ready(function() {
/*
	var defaults = {
	containerID: 'toTop', // fading element id
	containerHoverID: 'toTopHover', // fading element hover id
	scrollSpeed: 1200,
	easingType: 'linear' 
};
*/							
$().UItoTop({ easingType: 'easeOutQuart' });

});
</script>
<!-- //here ends scrolling icon -->
</body>	
</html>