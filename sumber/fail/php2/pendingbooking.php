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
#----------------------------------------------------------------------------------------------------
/*# proses debug
echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
echo '<pre>$posmen='; print_r($posmen); echo '</pre>';
echo '<pre>$posmen2='; print_r($posmen2); echo '</pre>';//*/
#----------------------------------------------------------------------------------------------------
//$ssm = $datessm = $lesenberniaga = $datelesenberniaga = $suntikan = $sijilpmakanan = 'yes';
if($posmen['ssm']=="yes" && $posmen['datessm']=="yes"
&& $posmen['lesenberniaga']=="yes" && $posmen['datelesenberniaga']=="yes"
&& $posmen['suntikan']=="yes" && $posmen['sijilpmakanan']=="yes")
{
	echo '<br>semua semakan lepas';
	$ssm = $posmen2['noSSM'];
	$sql = "UPDATE criteria SET status = 'accepted' WHERE ssm = $ssm";
}
else
{
	echo '<br>ada yang belum lepas';
}//*/
#----------------------------------------------------------------------------------------------------
/*
	//echo $select  = mysqli_query($connect,
	//"UPDATE criteria SET status = 'accepted' WHERE ssm = $ssm");
*/
#----------------------------------------------------------------------------------------------------
	function ubahsuaiPost($ceklist)
	{
		$posmen = $posmen2 = array();
		foreach($_POST as $jadual => $k1):
			if (is_array($k1) || is_object($k1)):
			# mula - pastikan $k1 wujud
				foreach($k1 as $kekunci => $papar):
					if($jadual == $ceklist)
						$posmen[$kekunci] = bersih($papar);
				endforeach;
			else:
				$posmen2[$jadual] = bersih($k1);
			endif;
		endforeach;
		//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		return array($posmen,$posmen2); # pulangkan nilai
	}
#----------------------------------------------------------------------------------------------------