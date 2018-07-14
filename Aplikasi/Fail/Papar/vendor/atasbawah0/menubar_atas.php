<?php 
$nav = 'class="dropdown-toggle" data-toggle="dropdown"';
//<ul class="nav navbar-nav navbar-right">
$classUL = 'nav navbar-nav navbar-right';
$iconFA['User'] = '<i class="fas fa-user"></i>';
$iconFA['Barcode'] = '<i class="fas fa-barcode"></i>';
$iconFA['Filter'] = '<i class="fas fa-filter"></i>';
$iconFA['Stats'] = '<i class="fas fa-chart-bar"></i>';
$iconFA['Ask'] = '<i class="fas fa-question-circle"></i>';
$iconFA['Power'] = '<i class="fas fa-power-off"></i>';
?>
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo URL ?>vendor/profile">
			<?php echo $iconFA['User'] ?>profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo URL ?>vendor/booking">
			<?php echo $iconFA['Ask'] ?>booking</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo URL ?>vendor/status">
			<?php echo $iconFA['Barcode'] ?>status</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo URL ?>vendor/payment">payment</a>
		</li>
		</ul>
	</div>
