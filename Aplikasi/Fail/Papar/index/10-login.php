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
	$sql = "SELECT * FROM admin WHERE id = '".$id."' AND password = '".$password."'";
	if($result = $connect->query($sql))
	{
		$rows = $result->fetch_array();
		if($total = $result->num_rows)
		{
			$_SESSION['id'] = $rows['id'];
			echo "<script language=javascript>window.location='admin/index.php';</script>";
		}
		else
		{
			$sql = "SELECT * FROM vendor WHERE id = '".$id."' AND password = '".$password."'";
			if($result = $connect->query($sql))
			{
				$rows = $result->fetch_array();
				if($total = $result->num_rows)
				{
					$_SESSION['id'] = $rows['id'];
					echo "<script language=javascript>window.location='vendor/editprofile.php';</script>";
				}
				else
				{
					
					echo "<script language=javascript>alert('Log masuk tidak berjaya. Sila cuba lagi.');"
					."window.location='login.php';</script>";
				}
			}
		}
	}
}
	

?>
<?php

include ("header.php");

?>

		<div class="agileinfo-top-heading">
			<h2>SIGN IN</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	
			
			<body>
	<div align="center">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			
			<tr>
				<td>
								
								<form id="borang_pelanggan_masuk" name="borang_pelanggan_masuk" method="post" style="padding-top:20px" action="">
									
									
									
									<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
										<tr>
											<td width="23"><img src="images/kotak_01_01.png" width="23" height="21" alt="" /></td>
											<td background="images/kotak_01_02.png">&nbsp;</td>
											<td width="31" height="21"><img src="images/kotak_01_03.png" width="31" height="21" alt="" /></td>
										</tr>
										<tr>
											<td background="images/kotak_01_04.png">&nbsp;</td>
											<td valign="top" bgcolor="#FFFFFF">
												<table border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
													<tr>
														<td><div class="sub-tajuk-borang bulat">Sign In</div></td>
													</tr>
													<tr>
														<td>Username </td>
													</tr>
													<tr>
														<td>
															<span id="sprytextfield1">
																<input name="id" type="text" class="input" size="45" id="username" /><br/>
																<span class="textfieldRequiredMsg">ID Pengguna diperlukan.</span>
															</span>
														</td>
													</tr>
													<tr>
														<td>Password</td>
													</tr>
													<tr>
														<td>
															<span id="sprypassword1">
																<input name="password" type="password" class="input" size="45" id="password" /><br/>
																<span class="passwordRequiredMsg">Kata laluan diperlukan.</span>
															</span>
														</td>
													</tr>
													<tr>
														<td align="left"><br>
															<button type="submit" name="login" class="butangkecil"><span>SUBMIT</span></button>
															<button type="reset" name="reset" class="butangkecil"><span>CLEAR</span></button>
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
	var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
	</script>
</body>
	<!-- //gallery --> 
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