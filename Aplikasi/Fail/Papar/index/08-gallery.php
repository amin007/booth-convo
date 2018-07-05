<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

include ("header.php");

?>
		<div class="agileinfo-top-heading">
			<h2>Our Gallery</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	<div class="gallery">
		<div class="container"> 
			<div id="jzBox" class="jzBox">
				<div id="jzBoxNextBig"></div>
				<div id="jzBoxPrevBig"></div>
				<img src="#" id="jzBoxTargetImg" alt=""/>
				<div id="jzBoxBottom">
					<div id="jzBoxTitle"></div>
					<div id="jzBoxMoreItems">
						<div id="jzBoxCounter"></div>
						<i class="arrow-left" id="jzBoxPrev"></i> 
						<i class="arrow-right" id="jzBoxNext"></i> 
					</div>
					<i class="close" id="jzBoxClose"></i>
				</div>
			</div>
			<div class="gallery-grids-row">
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g1.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g1.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    		
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g2.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g2.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    			
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g3.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g3.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    			
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g4.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g4.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    			
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g5.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g5.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    		
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g6.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g6.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    		
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g7.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g7.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    			
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g3.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g3.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    		
					</div>
				</div>  
				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4">  
						<a href="images/g1.jpg" class="jzBoxLink item-hover" title="Events Venue">  
							<img src="images/g1.jpg" alt=" " class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>    		
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script src="js/jzBox.js"></script>
		</div>
	</div>
	<!-- //gallery --> 
	<!-- footer -->
	<?php
	
	include ("footer.php");
	
	?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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