<?php
//session_start();
//include('../config.php');

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
	list($posmen,$myTable) = ubahsuaiPost($myTable='criteria');
	//$image = $imagename = null;
	$image=addslashes($_FILES['image']['tmp_name']);
	$imagename=addslashes($_FILES['image']['name']);
	$image=file_get_contents($image);
	$image=base64_encode($image);//*/

	# mula ulang $jadual
	//$sql = sql_insert_set($myTable, $posmen[$myTable]);
	$sql = sql_insert_values($myTable, $posmen[$myTable]);
	echo '<pre>$sql->:'; print_r($sql); echo '</pre><hr>';

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
/*
	$datessm = date('Y-m-d');
	$start_date = date($datessm);
	$enddate = strtotime('+400 days', strtotime($datessm));
	$now = time();//mktime();
	$date_diff=($enddate-$now) / 86400;

*/
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

	return $papar;
}
#------------------------------------------------------------------------------------------
	function ubahsuaiPost($myTable)
	{
		$posmen = array();
		foreach ($_POST as $kekunci => $papar):
			$posmen[$myTable][$kekunci] = bersih($papar);
		endforeach;

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

		return $sql;
	}
#-------------------------------------------------------------------------------------------------
	function sql_insert_values($myTable, $senarai)
	{
		//echo '<pre>$data->'; print_r($data); echo '</pre>';
		list($medan,$data) = setNilai1Values($senarai);
		# set sql
		$sql  = "INSERT INTO `$myTable`\r($medan) VALUES \r";
		$sql .= "($data);";
		//$sql .= implode(",\r", $data) . ";";

		return $sql;
	}
#-------------------------------------------------------------------------------------------------
	function setNilai1Values($data)
	{
		$jalur = $baris = null; //echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $kunci => $nilai)
		{
			$jalur[] = $kunci;
			//$baris[] = ($nilai==null) ? "/*$kunci*/null" : "/*$kunci*/'$nilai'";
			$baris[] = ($nilai==null) ? "null" : "'$nilai'";
		}

		$medan = implode(",", $jalur) . "";
		$senarai = "" . implode(",", $baris) . "";

		return array($medan,$senarai);
	}
#-------------------------------------------------------------------------------------------------
