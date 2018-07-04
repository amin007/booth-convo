			<table width="750" border="0" align="center" cellpadding="3" cellspacing="1">
			<tr><td colspan="2"><br>
				<div class="sub-tajuk-hijau">
					<table width="750" border="0" cellspacing="1" cellpadding="3">
					<tr>
						<td width="16" valign="middle"><img src="<?php echo $url ?>images/tanda.png" width="16" height="16" alt="" /></td>
						<td align="left" valign="middle">Please complete the form below with the correct and valid data only.</td>
					</tr>
					<tr>
						<td valign="middle"><img src="<?php echo $url ?>images/peringatan.png" alt="" width="16" height="16" /></td>
						<td align="left" valign="middle">Any false information is strictly prohibited.</td>
					</tr>
					<tr>
						<td valign="middle"><img src="<?php echo $url ?>images/kunci.png" alt="" width="16" height="16" /></td>
						<td align="left" valign="middle">The space marked <font color="#FF0000"><strong>*</strong></font> is <strong>mandatory fields.</strong></td>
					</tr>
					</table>
					</div>
					</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><br><div class="sub-tajuk-kuning2">
				<strong>INFORMATION DETAILS</strong></div></td>
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
