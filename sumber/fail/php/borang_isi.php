<?php
$url = '../../rangka-dawai/w3-event-venue/';
$_SESSION['idvendor'] = 'ini semua adalah cubaan';
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="<?=$url?>css/style1.css" />
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center">
<table><tr><td valign="top">
<table><tr><td valign="top">
	<form action="borang_proses.php" method="post" enctype="multipart/form-data">
	<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
		<td width="23"><img src="<?=$url?>images/kotak_01_01.png" width="23" height="21" alt="" /></td>
		<td background="<?=$url?>images/kotak_01_02.png">&nbsp;</td>
		<td width="31" height="21"><img src="<?=$url?>images/kotak_01_03.png"
		width="31" height="21" alt="" /></td>
	</tr>
	<tr>
		<td background="<?=$url1?>images/kotak_01_04.png">&nbsp;</td>
		<td valign="top" bgcolor="#FFFFFF">
			<table width="750" border="0" align="center" cellpadding="3" cellspacing="1">
			<tr><td colspan="2"><br>
				<div class="sub-tajuk-kelabu">BOOKING DETAILS</div>
			</td></tr></table>
		</td>
	</tr>
	<tr>
		<td width="270" align="right"><br>Date Criteria  :</td>
		<td width="480" align="left">
			<span id="sprytextfield1">
				<br><input name="datecriteria" type="date" class="input" id="datecriteria" 
				value="<?php echo date('Y-d-m'); ?>" size="20"/>
			</span>
		</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>Username  : &nbsp </td>
			<td width="480" align="left">	<span id="sprytextfield1">
					<br><?php echo ucwords($_SESSION['idvendor']);?>
					<input name="idvendor" type="hidden" class="input" id="idvendor" 
					value="<?php echo ucwords($_SESSION['idvendor']);?>" size="45"/>
				</span>
			</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>Date Result  :</td>
			<td width="480" align="left"><span id="sprytextfield1">
					<br><input name="dateresult" type="date" class="input" id="dateresult" 
					value="" size="20"/>
				</span>
			</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>No. SSM  :</td>
			<td width="480" align="left">
				<span id="sprytextfield1">
					<br><input name="ssm" type="text" class="input" id="ssm" value="" size="20"/>
				</span>
			</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>Date of SSM :</td>
			<td width="480" align="left">
				<span id="sprytextfield1">
					<br><input name="datessm" type="date" class="input" id="datessm" 
					value="<?php echo date('Y-d-m'); ?>" size="20"/>
				</span>
			</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>No. of Business License  :</td>
			<td width="480" align="left">
				<span id="sprytextfield2">
					<br><input name="lesenberniaga" type="text" class="input" id="lesenberniaga" 
					value="" size="20"/>
				</span>
			</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>Date of Business License :</td>
			<td width="480" align="left">
				<span id="sprytextfield1">
					<br><input name="datelesenberniaga" type="date" class="input" id="datelesenberniaga" 
					value="" size="20"/>
				</span>
			</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>Date of Thypoid Injection  :</td>
			<td width="480" align="left">
				<span id="sprytextfield3">
					<br><input name="suntikan" type="date" class="input" id="suntikan" 
					value="" size="45"/>
				</span>
			</td>
	</tr>
	<tr>
			<td width="270" align="right"><br>Food Handling Certificate :</td>
			<td width="480" align="left">
				<span id="sprytextfield3">
					<br><input name="sijilpmakanan" type="date" class="input" id="sijilpmakanan" 
					value="" size="45"/>
				</span>
			</td>
	</tr>
	<tr>
		<td width="270" align="right"><br>Process Fees  :</td>
		<td width="480" align="left">
			<label for="gambar"></label>
			<br><input type="file" name="image" id="image" class="input" />
		</td>
	</tr>
	<tr>
		<td>
		<!-- //banner -->
		<!-- gallery -->
		<table>
		<tr>
		<td align="right">&nbsp;</td>
		<td align="left">
		<br><br><button type="submit" name="submit" class="butangadmin"><span>SUBMIT</span></button>
		<button type="reset" class="butangadmin"><span>CLEAR</span></button>
		</td>
		</tr>
		</table> 
		</td>
	</tr>
	</table>
</td></tr><table>	
<td>
	<td background="<?=$url?>images/kotak_01_05.png">&nbsp;</td>
</tr>
<tr>
	<td><img src="<?=$url?>images/kotak_01_06.png" width="23" height="33" alt="" /></td>
	<td background="<?=$url?>images/kotak_01_07.png">&nbsp;</td>
	<td height="33"><img src="<?=$url?>images/kotak_01_08.png" width="31" height="33" alt="" /></td>
</tr>
</table>	

<!-- // mula - masukkan javascripe di sini -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script type="text/javascript">
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
	var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
	var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
	var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["change"]});
	var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["change"]});
	var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {validateOn:["change"]});
	var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {validateOn:["change"]});
</script>
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
<!-- // tamat - masukkan javascripe di sini -->
</body>	
</html>