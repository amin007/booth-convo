<?php
//session_start();
//include('../config.php');

echo '<pre>'; print_r($_POST); echo '</pre><hr>';
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
	$datessm = date('Y-m-d');
	$start_date = date($datessm);
	$enddate = strtotime('+400 days', strtotime($datessm));
	$now = time();//mktime();
	$date_diff=($enddate-$now) / 86400;
	$datecriteria=$_POST['datecriteria'];
	$idvendor=$_POST['idvendor'];
	$dateresult=$_POST['dateresult'];
	$ssm=$_POST['ssm'];
	$datessm=$_POST['datessm'];
	$lesenberniaga=$_POST['lesenberniaga'];
	$datelesenberniaga=$_POST['datelesenberniaga'];
	$suntikan=$_POST['suntikan'];
	$sijilpmakanan=$_POST['sijilpmakanan'];
	//$image = $imagename = null;
	$image=addslashes($_FILES['image']['tmp_name']);
	$imagename=addslashes($_FILES['image']['name']);
	$image=file_get_contents($image);
	$image=base64_encode($image);//*/

	$sql = "INSERT INTO criteria (datecriteria,idvendor,dateresult,ssm,datessm,lesenberniaga,datelesenberniaga,"
	. "\rsuntikan,sijilpmakanan,image,imagename)"
	. "\rVALUES ('$datecriteria','$idvendor','$dateresult','$ssm','$datessm','$lesenberniaga','$datelesenberniaga',"
	. "'$suntikan', '$sijilpmakanan',\r'$image',\r'$imagename')";
	echo '<pre>$sql-><b>'; print_r($sql); echo '</pre><hr>';

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
?>
