	<tr >
	<!--<td align='center'></td></center>
	<td align='center'></td></center>-->
	<td align='center'><?php echo $row['idvendor'] ?></td>
	<td align='center'><?php echo $row['ssm'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align='center'><?php echo $row['4'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align='center'><?php echo $row['6'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align='center'><?php echo $row['7'] ?></td></center>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align='center'><?php echo $row['9'] ?></td></center>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align='center'><?php echo $row['11'] ?></td></center>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<!--<td align='center'></td></center>-->
<?php
	if($ssm=="yes" && $datessm=="yes" && $lesenberniaga=="yes"
	&& $datelesenberniaga=="yes" 
	&& $suntikan=="yes" && $sijilpmakanan=="yes")
	{
		echo '$status';
	}//*/
	//$status = ' $status mana datang nilai ini?';
?>	
	<td>
		<form action="pendingbooking.php" method="post">
			<input type="hidden" name="accepted" value="<?php echo $status ?>">
			<button class="btn success-btn" name="send">Approve</button>
			<button class="btn success-btn"><?php echo $status ?></button>
		</form>
<?php
	//echo $select  = mysqli_query($connect, 
	//"UPDATE criteria SET status = 'accepted' WHERE ssm = $ssm");
?>
	</td>
	</tr>
