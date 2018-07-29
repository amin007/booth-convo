	<tr>
	<td align="center"><?php echo $row['idvendor'];
	/*$medan0 = $myTable . '[idvendor]';
	$data0 = $row['idvendor'];
	echo "\n\t\t" . '<input type="hidden" name="' . $medan0 . '"'
	. ' value="' . $data0 . '">' . "\n\t";//*/
	$medan1 = 'noSSM';
	$data1 = $row['ssm'];
	echo "\n\t\t" . '<input type="hidden" name="' . $medan1 . '"'
	. ' value="' . $data1 . '">' . "\n\t";
	?></td>
<?php
$ulang = array('ssm','datessm','lesenberniaga',
'datelesenberniaga','suntikan','sijilpmakanan');

foreach($ulang as $namaMedan):
	$name = $myTable . '[' . $namaMedan . ']';
	echo "\n\t" . '<td align="center">' . $row[$namaMedan] . '<br>';
	echo "\n\t\t" . '<input type="checkbox" name="' . $name . '" value="yes"> Yes<br>';
	echo "\n\t\t" . '<input type="checkbox" name="' . $name . '" value="no"> No';
	echo "\n\t" . '</td>';
endforeach;
echo "\n\t";
?>
	</td>
	<td>
		<span>Status = <?php echo $row['status'] ?></span><hr>
		<button class="btn success-btn" name="accepted"
		value="accepted">Approve</button>
	</td>
	</tr>
