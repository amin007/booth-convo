	<tr>
	<td align="center"><?php echo $row['idvendor'];
	$medan0 = $myTable . '[idvendor]';
	$data0 = $row['idvendor'];
	echo "\n\t\t" . '<input type="hidden" name="' . $medan0 . '"'
	. ' value="' . $data0 . '">' . "\n\t";
	?></td>
	<td align="center"><?php echo $row['ssm'] ?><br>
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['datessm'] ?><br>
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['lesenberniaga'] ?><br>
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['datelesenberniaga'] ?><br>
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['suntikan'] ?><br>
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td align="center"><?php echo $row['sijilpmakanan'] ?><br>
		<input type="checkbox" name="" value="yes"> Yes<br>
		<input type="checkbox" name="" value="no"> No
	</td>
	<td>
		<form action="pendingbooking.php" method="post">
			<span>Status = <?php echo $row['status'] ?></span><hr>
			<button class="btn success-btn" name="accepted"
			value="accepted">Approve</button>
		</form>
	</td>
	</tr>
