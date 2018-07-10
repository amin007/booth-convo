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
	<nav class="sidebar-nav">
	<ul class="nav">
	<li class="nav-item">
		<a href="<?php echo URL ?>" class="nav-link"><i class="icon icon-speedometer"></i> Dashboard</a>
	</li>
	<li class="nav-item nav-dropdown">
		<a href="#" class="nav-link nav-dropdown-toggle">
			<i class="icon icon-target"></i> Admin <i class="fa fa-caret-left"></i>
		</a>
		<ul class="nav-dropdown-items">
		<li class="nav-item">
			<a href="<?php echo URL ?>admin/staffAdd" class="nav-link"><i class="icon icon-puzzle"></i> Add New Admin</a>
		</li>
		<li class="nav-item">
			<a href="<?php echo URL ?>admin/staffAdd" class="nav-link"><i class="icon icon-puzzle"></i> View Admin</a>
		</li>
		</ul>
	<li class="nav-item nav-dropdown">
		<a href="#" class="nav-link nav-dropdown-toggle">
			<i class="icon icon-energy"></i> Product <i class="fa fa-caret-left"></i>
		</a>
		<ul class="nav-dropdown-items">
		<li class="nav-item">
			<a href="<?php echo URL ?>admin/productAdd" class="nav-link"><i class="icon icon-energy"></i> Add New Product</a>
		</li>
		<li class="nav-item">
			<a href="<?php echo URL ?>admin/productView" class="nav-link"><i class="icon icon-energy"></i> View Product</a>
		</li>
		</ul>
	</li>
	<li class="nav-item">
		<a href="<?php echo URL ?>admin/reportView" class="nav-link"><i class="icon icon-grid"></i> Report</a>
	</li>
	</ul>
	</nav>
