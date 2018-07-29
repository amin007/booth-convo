<?php
//session_start();
include('config.php');

//echo '<pre>$_POST:'; print_r($_POST); echo '</pre><hr>';
#----------------------------------------------------------------------------------------------------
# setkan nilai awal
$ceklist = 'semak';
# godek data $_POST
list($posmen,$posmen2) = ubahsuaiPost($ceklist);
#----------------------------------------------------------------------------------------------------
//$ssm = $datessm = $lesenberniaga = $datelesenberniaga = $suntikan = $sijilpmakanan = 'yes';
if(isset($posmen))
{
	$ssm = $posmen2['noSSM'];
	$sql = semakWujud($posmen,$posmen2);
	//echo '<pre>$sql='; print_r($sql); echo '</pre>';
	if($sql == null):
		$myTable = 'test3_criteria';
		$sql = "UPDATE $myTable SET status = 'pending' WHERE ssm = '$ssm' ";
		# masuk ke DB Mysqli
		mysqli_query($connect, $sql);
		header('location:borang_asal1.php?mesej=nonono&amp;ssm=' . $ssm);//*/
	else:
		# masuk ke DB Mysqli
		mysqli_query($connect, $sql);
		header('location:borang_asal1.php?ssm=' . $ssm);//*/
	endif;
}
else
{
	//echo '<br>ada yang belum lepas';
	$ssm = $posmen2['noSSM'];
	header('location:borang_asal1.php?mesej=error&amp;ssm=' . $ssm);//*/
}//*/
#----------------------------------------------------------------------------------------------------
#----------------------------------------------------------------------------------------------------
#----------------------------------------------------------------------------------------------------
# proses debug
//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';
//echo '<pre>$posmen2='; print_r($posmen2); echo '</pre>';
//echo '<pre>$sql='; print_r($sql); echo '</pre>';
//*/
#----------------------------------------------------------------------------------------------------
/*
	//echo $select = mysqli_query($connect,
	//"UPDATE criteria SET status = 'accepted' WHERE ssm = $ssm");
	if (is_array($k1) || is_object($k1)):
*/
#----------------------------------------------------------------------------------------------------
	function ubahsuaiPost($ceklist)
	{
		$posmen = $posmen2 = null;
		foreach($_POST as $key => $k1):if(isset($_POST[$key]['accepted'])):
		foreach($k1 as $jadual => $k2):
			if($jadual == $ceklist):
				foreach($k2 as $kekunci => $papar):
					$posmen[$kekunci] = bersih($papar);
				endforeach;
			else:
				$posmen2[$jadual] = bersih($k2);
			endif;
		endforeach;
		endif;endforeach;
		//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		return array($posmen,$posmen2); # pulangkan nilai
	}
#----------------------------------------------------------------------------------------------------
	function semakWujud($posmen,$posmen2)
	{
		if( isset($posmen['ssm']) && isset($posmen['datessm'])
		&& isset($posmen['lesenberniaga']) && isset($posmen['datelesenberniaga'])
		&& isset($posmen['suntikan']) && isset($posmen['sijilpmakanan']) )
		{
			//echo '<br>semua $posmen wujud';
			$sql = semakNilai($posmen,$posmen2);
			return $sql;
		}
	}
#----------------------------------------------------------------------------------------------------
	function semakNilai($posmen,$posmen2)
	{
		if($posmen['ssm']=="yes" && $posmen['datessm']=="yes"
		&& $posmen['lesenberniaga']=="yes" && $posmen['datelesenberniaga']=="yes"
		&& $posmen['suntikan']=="yes" && $posmen['sijilpmakanan']=="yes")
		{
			//echo '<br>semua semakan lepas';
			$ssm = $posmen2['noSSM'];
			$myTable = 'test3_criteria';
			$sql = "UPDATE $myTable SET status = 'accepted' WHERE ssm = '$ssm' ";
			return $sql;
		}
	}
#----------------------------------------------------------------------------------------------------