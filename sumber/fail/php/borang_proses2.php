<?php
//session_start();
//include('config.php');

echo '<pre>$_POST:'; print_r($_POST); echo '</pre><hr>';
/*
data dari borang sepatutnya macam ini_get
Array
(
    [datecriteria] => 2018-07-01
    [idvendor] => Ini Semua Adalah Cubaan
    [dateresult] => 2018-07-02
    [ssm] => 123654
    [datessm] => 2018-01-01
    [lesenberniaga] => 
    [datelesenberniaga] => 2018-01-02
    [suntikan] => 2018-01-03
    [sijilpmakanan] => 2018-01-05
    [submit] => 
)
*/

if(isset($_POST['submit']))
{
	# buat data $posmen
	unset($_POST['submit']);
	# untuk satu nilai sahaja
	//list($posmen,$myTable) = ubahsuaiPost($myTable='criteria');
	//$sql = sql_insert_set($myTable, $posmen[$myTable]);
	//$sql = sql_insert_values($myTable, $posmen[$myTable]);
	//list($sql,$dataProsi) = insertSqlValuesPDO($myTable, $posmen[$myTable]);
	# untuk banyak nilai
	list($posmen,$myTable) = ubahsuaiPost2($myTable='test2_criteria');
	//$sql = sql_insert_manyValues($myTable, $posmen[$myTable]);
	list($sql,$dataProsi) = insertSqlManyValuesPDO($myTable, $posmen[$myTable]);
	//*/
	# semak nilai debug
	echo '<hr><pre>$sql->:'; print_r($sql); echo '</pre><hr>';
	echo '<hr><pre>$dataProsi->:'; print_r($dataProsi); echo '</pre><hr>';
	# masuk ke DB PDO
	$connect->tesTnsertAll($sql,$dataProsi);
	/*if ($connect->query($sql) === TRUE) 
	{
		echo"<script>alert('Data successfully add!');document.location.href='booking.php'</script>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $connect->error;
	}//*/
}
//*/
#------------------------------------------------------------------------------------------
function setDating($posmen,$myTable,$medan)
{
	# kira tarikh
	//$date['startDate'] = date('Y-m-d');
	$date['startDate'] = date($posmen[$myTable][$medan]);
	$date['endDate'] = strtotime('+400 days', strtotime($date['startDate']));
	$date['now'] = time();//mktime();
	$date['diffDate'] = ($date['endDate']-$date['now']) / 86400;
	$posmen[$myTable]['tamatLesen'] = nombor($date['diffDate']);
	# semak output
	//echo '<pre>$date='; print_r($date); echo '</pre>';
	//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

	return $posmen;//*/
}
#------------------------------------------------------------------------------------------
function setFiles($posmen,$myTable)
{
	$image = $imagename = 'abc123ded456gji789';
	# proses $_FILES
	$imagename = addslashes($_FILES['image']['name']);
	/*$image = addslashes($_FILES['image']['tmp_name']);
	$image = file_get_contents($image);
	$image = base64_encode($image);//*/
	$posmen[$myTable]['image'] = $image;
	$posmen[$myTable]['imagename'] = $imagename;
	# semak output
	//echo '<pre>$_FILES:'; print_r($_FILES); echo '</pre><hr>';
	//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

	return $posmen;//*/
}
#------------------------------------------------------------------------------------------
function setManyDating($kira,$posmen,$myTable,$medan)
{
	# kira tarikh
	//$date['startDate'] = date('Y-m-d');
	$date['startDate'] = date($posmen[$myTable][$kira][$medan]);
	$date['endDate'] = strtotime('+400 days', strtotime($date['startDate']));
	$date['now'] = time();//mktime();
	$date['diffDate'] = ($date['endDate']-$date['now']) / 86400;
	$posmen[$myTable][$kira]['tamatLesen'] = nombor($date['diffDate']);
	# semak output
	//echo '<pre>$date='; print_r($date); echo '</pre>';
	//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

	return $posmen;//*/
}
#------------------------------------------------------------------------------------------
function setManyFiles($kira,$posmen,$myTable)
{
	//$image = $imagename = 'abc123ded456gji789';
	# proses $_FILES
	$imagename = addslashes($_FILES['image']['name']);
	$image = addslashes($_FILES['image']['tmp_name']);
	$image = file_get_contents($image);
	$image = base64_encode($image);//*/
	$posmen[$myTable][$kira]['image'] = $image;
	$posmen[$myTable][$kira]['imagename'] = $imagename;
	# semak output
	//echo '<pre>$_FILES:'; print_r($_FILES); echo '</pre><hr>';
	//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

	return $posmen;//*/
}
#------------------------------------------------------------------------------------------
/*
	$datecriteria=$_POST['datecriteria'];
	$idvendor=$_POST['idvendor'];
	$dateresult=$_POST['dateresult'];
	$ssm=$_POST['ssm'];
	$datessm=$_POST['datessm'];
	$lesenberniaga=$_POST['lesenberniaga'];
	$datelesenberniaga=$_POST['datelesenberniaga'];
	$suntikan=$_POST['suntikan'];
	$sijilpmakanan=$_POST['sijilpmakanan'];
*/
#------------------------------------------------------------------------------------------
function bersih($papar)
{
	# lepas lari aksara khas dalam SQL
	//$papar = mysql_real_escape_string($papar);
	# buang ruang kosong (atau aksara lain) dari mula & akhir 
	$papar = trim($papar);

	return $papar;//*/
}
#------------------------------------------------------------------------------------------
function nombor($papar, $pilih = 'floor')
{
	if($pilih == 'round')# http://php.net/manual/en/function.round.php
		$papar = round($papar, 0); # echo round(3.6, 0); // 4
	if($pilih == 'ceil')# http://php.net/manual/en/function.ceil.php
		$papar = ceil($papar); # echo ceil(4.3); // 5
	if($pilih == 'floor')# http://php.net/manual/en/function.floor.php
		$papar = floor($papar); # echo floor(9.999); // 9
	if($pilih == 'number_format')#http://php.net/manual/en/function.number-format.php
		$papar = number_format($papar, 0, '.', ','); // 1234.56->1234.57
		# http://php.net/manual/en/function.money-format.php

	return $papar;//*/
}
#------------------------------------------------------------------------------------------
	function ubahsuaiPost($myTable)
	{
		$posmen = array();
		foreach ($_POST as $kekunci => $papar):
			$posmen[$myTable][$kekunci] = bersih($papar);
		endforeach;
		$posmen = setDating($posmen,$myTable,'datessm');
		$posmen = setFiles($posmen,$myTable);
		//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		return array($posmen,$myTable); # pulangkan nilai
	}
#-------------------------------------------------------------------------------------------
	function ubahsuaiPost2($myTable)
	{
		$posmen = array();
		for($kira = 0; $kira < 3; $kira++):
			foreach ($_POST as $kekunci => $papar):
				$posmen[$myTable][$kira][$kekunci] = bersih($papar);
			endforeach;
			$posmen = setManyDating($kira,$posmen,$myTable,'datessm');
			$posmen = setManyFiles($kira,$posmen,$myTable);
		endfor;
		//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		return array($posmen,$myTable); # pulangkan nilai
	}
#-------------------------------------------------------------------------------------------
	function sql_insert_set($myTable, $data)
	{
		$senarai = null; //echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $medan => $nilai)
		{
			$senarai[] = ($nilai==null) ? " `$medan`=null" : " `$medan`='$nilai'";
		}

		# set sql
		$sql  = "INSERT INTO `$myTable` SET \r";
		$sql .= implode(",\r", $senarai);

		return $sql;//*/
	}
#-------------------------------------------------------------------------------------------------
	function sql_insert_values($myTable, $data)
	{
		$medan = $baris = $senarai = null;
		//echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $kunci => $nilai)
		{
			$medan[] = $kunci;
			//$baris[] = ($nilai==null) ? "/*$kunci*/null" : "/*$kunci*/'$nilai'";
			$baris[] = ($nilai==null) ? "null" : "'$nilai'";
		}	$senarai[] = '(' . implode(",\r", $baris) . ')';
		//echo '<pre>$medan->'; print_r($medan); echo '</pre>';
		//echo '<pre>$baris->'; print_r($baris); echo '</pre>';
		//echo '<pre>$senarai->'; print_r($senarai); echo '</pre>';
		# set sql
		$sql  = "INSERT INTO `$myTable`\r(";
		$sql .= implode(",", $medan) . ") VALUES \r";
		$sql .= implode(",", $senarai) . ";";

		return $sql;//*/
	}
#-------------------------------------------------------------------------------------------------
	function insertSqlValuesPDO($myTable, $data)
	{
		$medan = $baris = $senarai = null; $kira = 0;
		//echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $kunci => $nilai)
		{
			$medan[] = $kunci;
			$baris[] = ($nilai==null) ? "null" : ':$kunci'.$kira++.'';
		}	$senarai[] = '(' . implode(",", $baris) . ')';
		/*echo '<pre>$medan->'; print_r($medan); echo '</pre>';
		echo '<pre>$baris->'; print_r($baris); echo '</pre>';
		echo '<pre>$senarai->'; print_r($senarai); echo '</pre>';//*/
		# set sql
		$sql  = "INSERT INTO `$myTable`\r(";
		$sql .= implode(',', $medan) . ")\rVALUES \r";
		$sql .= implode(',', $senarai) . ";";

		return array($sql,$data);//*/
	}
#-------------------------------------------------------------------------------------------------
	function sql_insert_manyValues($myTable, $data)
	{
		$medan = $baris = $senarai = null;
		//echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $k => $v): foreach ($v as $kunci => $nilai):
			if($k==0) $medan[] = $kunci;
			$baris[$k][] = ($nilai==null) ? 'null' : "'$nilai'";
		endforeach; $senarai[] = '(' . implode(',', $baris[$k]) . ')';
		endforeach;
		//echo '<pre>$medan->'; print_r($medan); echo '</pre>';
		//echo '<pre>$baris->'; print_r($baris); echo '</pre>';
		//echo '<pre>$senarai->'; print_r($senarai); echo '</pre>';
		# set sql
		$sql  = "INSERT INTO `$myTable`\r(";
		$sql .= implode(',', $medan) . ")\rVALUES \r";
		$sql .= implode(',', $senarai) . ";";

		return $sql;//*/
	}
#-------------------------------------------------------------------------------------------------
	function insertSqlManyValuesPDO($myTable, $data)
	{
		$medan = $baris = $baris2 = $senarai = null;
		//echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $k => $v): foreach ($v as $kunci => $nilai):
			if($k==0) $medan[] = $kunci;
			//$kunciUtama = $kunci . '_' . $k;
			$kunciUtama = $k . '_' . $kunci;
			$baris[$k][] = ($nilai==null) ? "null" : ":$kunciUtama";
			$baris2[$kunciUtama] = ($nilai==null) ? 'null' : "'$nilai'";
		endforeach; $senarai[] = '(' . implode(',', $baris[$k]) . ')';
		endforeach;
		/*echo '<pre>$medan->'; print_r($medan); echo '</pre>';
		echo '<pre>$baris->'; print_r($baris); echo '</pre>';
		echo '<pre>$senarai->'; print_r($senarai); echo '</pre>';//*/
		# set sql
		$sql  = "INSERT INTO `$myTable`\r(";
		$sql .= implode(',', $medan) . ")\rVALUES \r";
		$sql .= implode(",\r", $senarai) . ";";

		return array($sql,$baris2);//*/
	}
#-------------------------------------------------------------------------------------------------
