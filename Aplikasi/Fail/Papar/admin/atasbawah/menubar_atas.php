<?php
$iconFA['User'] = '<i class="fas fa-user"></i>';
$iconFA['UserAdd'] = '<i class="fas fa-user-plus"></i>';
$iconFA['UserView'] = '<i class="far fa-address-book"></i>';
$iconFA['Barcode'] = '<i class="fas fa-barcode"></i>';
$iconFA['CartPlus'] = '<i class="fas fa-cart-plus"></i>';
$iconFA['Image'] = '<i class="far fa-image"></i>';
$iconFA['Filter'] = '<i class="fas fa-filter"></i>';
$iconFA['Stats'] = '<i class="fas fa-chart-bar"></i>';
$iconFA['Ask'] = '<i class="fas fa-question-circle"></i>';
$iconFA['Power'] = '<i class="fas fa-power-off"></i>';
?>
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="./" id="dropdown01" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<?php echo $iconFA['User'] ?> Staff</a>
			<div class="dropdown-menu" aria-labelledby="dropdown01">
			<a class="dropdown-item" href="#"><?php echo $iconFA['UserAdd'] ?> Staff Add</a>
			<a class="dropdown-item" href="#"><?php echo $iconFA['UserView'] ?> Staff View</a>
			</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="./" id="dropdown01" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
				<?php echo $iconFA['CartPlus'] ?> Product</a>
			<div class="dropdown-menu" aria-labelledby="dropdown01">
			<a class="dropdown-item" href="#"><?php echo $iconFA['Barcode'] ?> Product Add</a>
			<a class="dropdown-item" href="#"><?php echo $iconFA['Image'] ?> Product View</a>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><?php echo $iconFA['Stats'] ?> Report</a>
		</li>
		</ul>
	</div>
