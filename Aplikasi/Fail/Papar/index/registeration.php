<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include('config.php');

if(isset($_POST['login']))
{
	$sql = "SELECT * FROM vendor WHERE id = '".$id."'";
	if($result = $connect->query($sql))
	{
		if($total = $result->num_rows)
		{
			echo "<script language=javascript>alert('ID pengguna telah wujud. Sila cuba lagi.');"
			."window.location='registeration.php';</script>";
		}
		else
		{
			$sql = "INSERT INTO vendor (id, namevendor, password, email, phoneno, "
			."address1, address2, city, postcode,state) VALUES 
			('".$id."', '".$namevendor."', '".$password."', '".$email."', '".$phoneno
			."', '".$address1."', '".$address2."', '".$city."', '".$postcode."','".$state."')";
			if($result = $connect->query($sql))
			{
				echo "<script language=javascript>alert('Pendaftaran berjaya. Sila log masuk.');"
				."window.location='index.php';</script>";
			}
			else
			{
				echo "<script language=javascript>alert('Pendaftaran tidak berjaya. Sila cuba lagi.');"
				."window.location='registeration.php';</script>";
			}
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
</head>
<?php

include ("header.php");

?>
		<div class="agileinfo-top-heading">
			<h2>SIGN UP</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- icons -->
	<div class="agileinfo-top-heading">
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	
			
			<body>
	<div align="center">
		
			
			<tr>
				<td>
				
								<td valign="top">
								<form id="borang_pengesahan_pembayaran" name="borang_pengesahan_pembayaran" method="post" class="borang" style="padding-top:20px">
									<fieldset>
										
									
									<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
										<tr>
											<td width="23"><img src="images/kotak_01_01.png" width="23" height="21" alt="" /></td>
											<td background="images/kotak_01_02.png">&nbsp;</td>
											<td width="31" height="21"><img src="images/kotak_01_03.png" width="31" height="21" alt="" /></td>
										</tr>
										
										<tr>
											<td background="images/kotak_01_04.png">&nbsp;</td>
											<td valign="top" bgcolor="#FFFFFF">
												<table width="750" border="0" align="center" cellpadding="3" cellspacing="1">
											
												<tr> 
												<td colspan="2"><br>
													<div class='sub-tajuk-hijau'>
														<table width="750" border="0" cellspacing="1" cellpadding="3">
															<tr>
																<td width="16" valign="middle"><img src="images/tanda.png" width="16" height="16" alt="" /></td>
																<td align="left" valign="middle">Please complete the form below with the correct and valid data only.</td>
															</tr>
															<tr>
																<td valign="middle"><img src="images/peringatan.png" alt="" width="16" height="16" /></td>
																<td align="left" valign="middle">Any false information is strictly prohibited.</td>
															</tr>
															<tr>
																<td valign="middle"><img src="images/kunci.png" alt="" width="16" height="16" /></td>
																<td align="left" valign="middle">The space marked <font color="#FF0000"><strong>*</strong></font> is <strong>mandatory fields.</strong></td>
															</tr>
														</table>
													</div>
												</td>
											</tr>
											<tr>
											
												<td colspan="2" align="center"><br><div class="sub-tajuk-kuning2"><strong>INFORMATION DETAILS</strong></div></td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Username  :</td>
												<td width="480" align="left">
													<span id="sprytextfield1">
														<br><input name="id" type="text" class="input" id="id" value="" size="45" placeholder="Iffah"/>
														<font color="#FF0000"><strong>*</strong></font><br/>
														<span class="textfieldRequiredMsg">Username is required.</span>
													</span>
												</td>
											</tr>
													<tr>
												<td width="270" align="right"><br>Full Name  :</td>
												<td width="480" align="left">
													<span id="sprytextfield2">
														<br><input name="namevendor" type="text" class="input" id="namevendor" value="" size="45" placeholder="Nur Iffah Binti Sazali"/>
													</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Password  :</td>
												<td width="480" align="left">
													<span id="sprypassword1">
														<br><input name="password" type="password" class="input" id="password" value="" size="45" />
														<font color="#FF0000"><strong>*</strong></font><br/>
														<span class="passwordRequiredMsg">Password is required.</span>
													</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Confirm Password  :</td>
												<td width="480" align="left">
													<span id="spryconfirm1">
														<br><input name="cpassword" type="password" class="input" id="cpassword" value="" size="45" />
														<font color="#FF0000"><strong>*</strong></font><br/>
														<span class="confirmRequiredMsg">Confirmation password is required.</span>
														<span class="confirmInvalidMsg">Confirmation password doesn't match.</span>
													</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Email  :</td>
												<td width="480" align="left">
													<span id="sprytextfield3">
														<br><input name="email" type="text" class="input" id="email" value="" size="45" placeholder="Iffah@gmail.com" />
													<font color="#FF0000"><strong>*</strong></font><br/>
														<span class="textfieldRequiredMsg">Email is required.</span>
														<span class="textfieldInvalidFormatMsg">Invalid Email.</span>
													</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Phone Number  :</td>
												<td width="480" align="left">
													<span id="sprytextfield4">
														<br><input name="phoneno" type="text" class="input" id="phoneno" value="" size="45" placeholder="0123456789" /><br/>
														<span class="textfieldInvalidFormatMsg">Invalid Phone Number.</span>
														<span class="textfieldMinCharsMsg">Invalid Phone Number.</span>
														<span class="textfieldMaxCharsMsg">Invalid Phone Number.</span>
													</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Address1  :</td>
												<td width="480" align="left">
													<span id="sprytextfield5">
														<br><input name="address1" type="text" class="input" id="address1" value="" size="45" placeholder="No.4 Jalan TPS 3" />
													</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Address2  :</td>
												<td width="480" align="left">
													<span id="sprytextfield6">
														<br><input name="address2" type="text" class="input" id="address2" value="" size="45" placeholder="Taman Putra Saujana Fasa 2" />
														</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>City  :</td>
												<td width="480" align="left">
													<span id="sprytextfield7">
														<br><input name="city" type="text" class="input" id="city" value="" size="45" placeholder="Kajang"/>
														</span>
												</td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Postcode  :</td>
												<td width="480" align="left">
													<span id="sprytextfield8">
														<br><input name="postcode" type="text" class="input" id="postcode" value="" size="45" placeholder="12345" /><br/>
														<span class="textfieldInvalidFormatMsg">Invalid Postcode.</span>
														<span class="textfieldMinCharsMsg">Invalid Postcode.</span>
														<span class="textfieldMaxCharsMsg">Invalid Postcode.</span>
													</span>
												</td>
											</tr>
													<tr>
												<td width="270" align="right"><br>State  :</td>
												<td width="480" align="left">
													<span id="spryselect1">
														<br><select name="state" id="state" class="input">
															<option value="" selected="selected">-- Choose State --</option>
															<option value="Johor">Johor</option>
															<option value="Melaka">Melaka</option>
															<option value="Negeri Sembilan">Negeri Sembilan</option>
															<option value="Selangor">Selangor</option>
															<option value="Putrajaya">Putrajaya</option>
															<option value="Kuala Lumpur">Kuala Lumpur</option>
															<option value="Perak">Perak</option>
															<option value="Pulau Pinang">Pulau Pinang</option>
															<option value="Kedah">Kedah</option>
															<option value="Perlis">Perlis</option>
															<option value="Kelantan">Kelantan</option>
															<option value="Terengganu">Terengganu</option>
															<option value="Pahang">Pahang</option>
															<option value="Sabah">Sabah</option>
															<option value="Sarawak">Sarawak</option>
															<option value="Lain-lain">Lain-lain</option>
														</select>
													</span>
												</td>
											</tr>
											<tr>
												<td align="right">&nbsp;</td>
												<td align="left">
													<br><button type="submit" name="login" class="butangadmin"><span>SUBMIT</span></button>
													<button type="reset" class="butangadmin"><span>CLEAR</span></button>
												</td>
											</tr>
													
												</table>
											</td>
											<td background="images/kotak_01_05.png">&nbsp;</td>
										</tr>
										<tr>
											<td><img src="images/kotak_01_06.png" width="23" height="33" alt="" /></td>
											<td background="images/kotak_01_07.png">&nbsp;</td>
											<td height="33"><img src="images/kotak_01_08.png" width="31" height="33" alt="" /></td>
										</tr>
									</table>
								</form>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			
					</table>
				</td>
			</tr>
		</table>
		
	</div>
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