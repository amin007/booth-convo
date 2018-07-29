<?php
//session_start();
include('config.php');

//echo '<pre>$_POST:'; print_r($_POST); echo '</pre><hr>';
#----------------------------------------------------------------------------------------------------
# setkan nilai awal
$myTable = 'test3_criteria';
# godek data $_POST
list($posmen,$myTable) = ubahsuaiPost($myTable);
#----------------------------------------------------------------------------------------------------
# proses debug
//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';
#----------------------------------------------------------------------------------------------------
//$ssm = $datessm = $lesenberniaga = $datelesenberniaga = $suntikan = $sijilpmakanan = 'yes';
#----------------------------------------------------------------------------------------------------
if($ssm=="yes" && $datessm=="yes" && $lesenberniaga=="yes" && $datelesenberniaga=="yes"
&& $suntikan=="yes" && $sijilpmakanan=="yes")
{
	echo '$status';
}
#----------------------------------------------------------------------------------------------------
/*
	//echo $select  = mysqli_query($connect,
	//"UPDATE criteria SET status = 'accepted' WHERE ssm = $ssm");
*/
#----------------------------------------------------------------------------------------------------
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
#----------------------------------------------------------------------------------------------------