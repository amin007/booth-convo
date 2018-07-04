<!-- start nav -------------------------------------------------------------------------- -->
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
		data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<li><a class="active" href="<?php echo URL ?>">Home</a></li>
		<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown"
		role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a class="hvr-bounce-to-bottom" href="<?php
			echo URL . 'index/aboutbooth' ?>">About Booth</a></li>
			<li><a class="hvr-bounce-to-bottom" href="<?php
			echo URL . 'index/organization' ?>">Organization</a></li>
			</ul>
		</li>
		<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" 
		role="button" aria-haspopup="true" aria-expanded="false">Exhibitors<span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a class="hvr-bounce-to-bottom" href="<?php
			echo URL . 'index/registeration' ?>">Registeration</a></li>
			<!-- li><a class="hvr-bounce-to-bottom" href="<?php
			echo URL . 'vendor/booking' ?>">Booking</a></li -->
			<li><a class="hvr-bounce-to-bottom" href="<?php
			echo URL . 'index/boothfees' ?>">Booth Fees</a></li>
			<li><a class="hvr-bounce-to-bottom" href="<?php
			echo URL . 'index/floorplan' ?>">Floor Plan</a></li>
			<li><a class="hvr-bounce-to-bottom" href="<?php
			echo URL . 'index/rulesregulations' ?>">Rules & Regulations</a></li>
			</ul>
		</li>
		<li><a href="<?php echo URL . 'index/gallery' ?>">Gallery</a></li>
		<li><a href="<?php echo URL . 'index/contact' ?>">Contact</a></li>
		<li><a href="<?php echo URL . 'index/login' ?>"><i class="icon-user"></i>LOGIN</a></li>
		</ul>
		<div class="clearfix"> </div>
	</div>	
</nav>
<!-- end nav -------------------------------------------------------------------------- -->