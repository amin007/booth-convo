<?php
//include('config.php');
$url = URL . 'sumber/rangka-dawai/w3-event-venue/';
include 'atasbawah/diatas.php';
//include 'atasbawah/diatas-login.php';
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
		<h2>SIGN UP</h2>
	</div>
<!-- end agileinfo-top-heading-------------------------------------------------------- -->
</div><!-- //banner -->

<div align="center">
<table><tr><td>
	<table><tr><td valign="top">
<!-- start - booking form ----------------------------------------------------------------------------------- -->
<?php echo "\n"; include '04-registeration-form.php'; echo "\n"; ?>
<!-- end - booking form ----------------------------------------------------------------------------------------- -->
	</td></tr></table>
</td></tr></table>
</div>
<br><br><br><br><br>


<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {isRequired:false})
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {validateOn:["change"], isRequired:false, minChars:10, maxChars:11});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {isRequired:false});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {isRequired:false});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {isRequired:false});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "integer", {isRequired:false, minChars:5, maxChars:5, validateOn:["change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password", {validateOn:["change"]});
</script>
<!-- //icons -->

<!-- footer -->
<?php
//include 'atasbawah/footer.php'; 
echo "\n";
include 'atasbawah/dibawah.php';
