	<tr >
	<td align="center"><?php echo $row['idvendor'] ?></td>
	<td align="center"><?php echo $row['ssm'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['datessm'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['lesenberniaga'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['datelesenberniaga'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['suntikan'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['sijilpmakanan'] ?></td>
	<td align="center">
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<!--<td align="center"></td></center>-->
	<td>
<?php
	if($ssm=="yes" && $datessm=="yes" && $lesenberniaga=="yes"
	&& $datelesenberniaga=="yes" 
	&& $suntikan=="yes" && $sijilpmakanan=="yes")
	{
		//echo '$status';
	}//*/
?>
		<form action="pendingbooking.php" method="post">
			<span>Status = <?php echo $row['status'] ?></span><hr>
			<button class="btn success-btn" name="accepted"
			value="accepted">Approve</button>
		</form>
<?php
	//echo $select  = mysqli_query($connect, 
	//"UPDATE criteria SET status = 'accepted' WHERE ssm = $ssm");
?>
	</td>
	</tr>
