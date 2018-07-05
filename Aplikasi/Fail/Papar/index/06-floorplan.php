<?php
//include('config.php');
$url = URL . 'sumber/rangka-dawai/w3-event-venue/';
include 'atasbawah/diatas.php';
echo "\n";
?>
<!-- banner -->
<div class="banner">
<!-- start header -------------------------------------------------------------------------- -->
	<div class="header">
		<div class="container">
			<div class="header-left">
				<div class="w3layouts-logo">
					<h1><a href="index.php">Booth <span>Convocation</span></a></h1>
				</div>
			</div>
			<div class="top-nav"><?php
echo "\n"; include 'atasbawah/menubar.php'; echo "\n"; ?></div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- end header -------------------------------------------------------------------------- -->
<!-- start agileinfo-top-heading-------------------------------------------------------- -->
	<div class="agileinfo-top-heading">
		<h2>FLOOR PLAN</h2>
	</div>
</div><!-- //banner -->

<!-- start - section body ----------------------------------------------------------------------- -->
	<center>
	<img src="<?php echo $url ?>images/planfloor.jpg" width="90%" height"90%">
	</center>
<!-- ended - section body ----------------------------------------------------------------------- -->

<br><br><br><br><br><br>

<!-- footer -->
<?php
include 'atasbawah/footer.php'; echo "\n";
include 'atasbawah/dibawah.php';
