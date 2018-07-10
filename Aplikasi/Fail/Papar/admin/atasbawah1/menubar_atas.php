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
	<nav class="navbar page-header">
		<a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
			<i class="fa fa-bars"></i>
		</a>
		<a class="navbar-brand" href="#"><img src="<?php echo $url ?>imgs/logo.png" alt="logo"></a>
		<a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
			<i class="fa fa-bars"></i>
		</a>
		<ul class="navbar-nav ml-auto">
		<li class="nav-item d-md-down-none">
			<a href="#"><i class="fa fa-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
		</li>
		<li class="nav-item d-md-down-none">
			<a href="#"><i class="fa fa-envelope-open"></i><span class="badge badge-pill badge-danger">5</span></a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="<?php echo $url ?>imgs/avatar-1.png" class="avatar avatar-sm" alt="logo">
				<span class="small ml-1 d-md-down-none"><?php echo ucwords($userName) . " ($userID)";?></span>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="<?php echo URL ?>admin/logout" class="dropdown-item"><i class="fa fa-lock"></i> Logout</a>
			</div>
		</li>
		</ul>
	</nav>
