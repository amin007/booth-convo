	<tr>
	<td align="center"><?php echo $row['idvendor'];
	/*$medan0 = $myTable . '[idvendor]';
	$data0 = $row['idvendor'];
	echo "\n\t\t" . '<input type="hidden" name="' . $medan0 . '"'
	. ' value="' . $data0 . '">' . "\n\t";//*/
	?></td>
<?php
$ulang = array('ssm','datessm','lesenberniaga',
'datelesenberniaga','suntikan','sijilpmakanan');

foreach($ulang as $namaMedan):
	$name = $no . '[semak][' . $namaMedan . ']';
	echo "\n\t" . '<td align="center">' . $row[$namaMedan] . '<br>';
	echo "\n\t\t" . '<input type="checkbox" name="' . $name . '" value="yes"> Yes<br>';
	echo "\n\t\t" . '<input type="checkbox" name="' . $name . '" value="no"> No';
	echo "\n\t" . '</td>';
endforeach;
echo "\n\t";
?>
	</td>
	<td>
<?php
	$medan1 = $no . '[noSSM]';
	echo "\n\t\t" . '<input type="hidden" name="' . $medan1 . '"'
	. ' value="' . $row['ssm'] . '">' . "\n\t";
	$medan2 = $no . '[status]';
	echo "\n\t\t" . '<input type="hidden" name="' . $medan2 . '"'
	. ' value="' . $row['status'] . '">' . "\n\t";
	$submit1 = $no . '[btn][accepted]';
	$submit2 = $no . '[btn][pending]';
?>
		<span>Status = <?php echo $row['status'] ?></span><hr>
		<button class="btn success-btn" name="<?php echo $submit1 ?>"
		value="accepted">Approve</button>
		<button class="btn success-btn" name="<?php echo $submit2 ?>"
		value="pending">Pending</button>
	</td>
	</tr>
