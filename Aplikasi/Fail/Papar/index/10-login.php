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
		<h2>SIGN IN</h2>
	</div>
</div><!-- //banner -->

<!-- start - section body ----------------------------------------------------------------------- -->
<div align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<form id="borang_pelanggan_masuk" name="borang_pelanggan_masuk" style="padding-top:20px"
method="POST" action="<?php echo URL ?>borang/loginid">
<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr>
	<td width="23"><img src="<?php echo $url ?>images/kotak_01_01.png" width="23" height="21" alt="" /></td>
	<td background="<?php echo $url ?>images/kotak_01_02.png">&nbsp;</td>
	<td width="31" height="21"><img src="<?php echo $url ?>images/kotak_01_03.png" width="31" height="21" alt="" /></td>
</tr>
<tr>
	<td background="<?php echo $url ?>images/kotak_01_04.png">&nbsp;</td>
	<td valign="top" bgcolor="#FFFFFF">
		<table border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<tr><td><div class="sub-tajuk-borang bulat">Sign In</div></td></tr>
		<tr><td>Username </td></tr>
		<tr>
			<td>
			<span id="sprytextfield1">
			<input name="username" type="text" class="input" size="45" id="username" /><br/>
			<span class="textfieldRequiredMsg">ID Pengguna diperlukan.</span>
			</span>
			</td>
		</tr>
		<tr><td>Password</td></tr>
		<tr>
			<td>
				<span id="sprypassword1">
				<input name="password" type="password" class="input" size="45" id="password" /><br/>
				<span class="passwordRequiredMsg">Kata laluan diperlukan.</span>
				</span>
			</td>
		</tr>
		<tr>
			<td align="left">
				<input type="submit" name="Simpan" value="Login" class="btn btn-primary btn-large">
				<input type="reset" name="Reset" value="Reset" class="btn btn-default btn-large">
				<!-- button type="submit" name="login" class="butangkecil"><span>SUBMIT</span></button -->
				<!-- button type="reset" name="reset" class="butangkecil"><span>CLEAR</span></button -->
			</td>
		</tr>
		</table>
	</td>
	<td background="<?php echo $url ?>images/kotak_01_05.png">&nbsp;</td>
</tr>
<tr>
	<td><img src="<?php echo $url ?>images/kotak_01_06.png" width="23" height="33" alt="" /></td>
	<td background="<?php echo $url ?>images/kotak_01_07.png">&nbsp;</td>
	<td height="33"><img src="<?php echo $url ?>images/kotak_01_08.png" width="31" height="33" alt="" /></td>
</tr>
</table>
</form>
</td></tr></table>
</div>
<!-- //gallery --> 
<!-- ended - section body ----------------------------------------------------------------------- -->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
</script>

<!-- footer -->
<?php
include 'atasbawah/footer.php'; echo "\n";
include 'atasbawah/dibawah.php';

