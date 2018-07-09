<?php
include("header.php");
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            

                          <form id="borang_pengesahan_pembayaran" name="borang_pengesahan_pembayaran" method="post" class="borang" style="padding-top:20px">
									<fieldset>
										<table width="750" border="0" align="center" cellpadding="3" cellspacing="1">
											<tr>
												<td colspan="2" align="center"><div class="sub-tajuk-kelabu">ADD NEW STAFF</div></td>
											</tr>
										
									
									<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
										
										
										<tr>
										
											<td valign="top" bgcolor="#FFFFFF">
												<table width="750" border="0" align="center" cellpadding="3" cellspacing="1">
											
												<tr> 
												<td colspan="2"><br>
													<div class='sub-tajuk-hijau'>
														<table width="750" border="0" cellspacing="1" cellpadding="3">
															<tr>
																<td width="16" valign="middle"><img src="images/tanda.png" width="16" height="16" alt="" /></td>
																<td align="left" valign="middle">Sila isikan borang dibawah lengkap dengan data yang benar dan sah sahaja.</td>
															</tr>
															<tr>
																<td valign="middle"><img src="images/peringatan.png" alt="" width="16" height="16" /></td>
																<td align="left" valign="middle">Sebarang maklumat palsu adalah dilarang sama sekali.</td>
															</tr>
															<tr>
																<td valign="middle"><img src="images/kunci.png" alt="" width="16" height="16" /></td>
																<td align="left" valign="middle"><font color="#FF0000"><strong>*</strong></font> Menandakan ruangan tersebut <strong>WAJIB</strong> di isi.</td>
															</tr>
														</table>
													</div>
												</td>
											</tr>
											<tr>
											
												<td colspan="2" align="center"><br><div class="sub-tajuk-kuning2"><strong>STAFF INFORMATION DETAILS</strong></div></td>
											</tr>
											<tr>
												<td width="270" align="right"><br>Employee No  :</td>
												<td width="480" align="left">
													<span id="sprytextfield1">
														<br><input name="id" type="text" class="input" id="id" value="" size="45" placeholder="Iffah"/>
														<font color="#FF0000"><strong>*</strong></font><br/>
														<span class="textfieldRequiredMsg">Employee no is required.</span>
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
													<br><button type="submit" name="daftar" class="butangadmin"><span>SUBMIT</span></button>
													<button type="reset" class="butangadmin"><span>CLEAR</span></button>
												</td>
											</tr>
												</table>
											</td>
											
										</tr>
										<tr>
											
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
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper.js/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./vendor/chart.js/chart.min.js"></script>
<script src="./js/carbon.js"></script>
<script src="./js/demo.js"></script>
</body>
</html>
