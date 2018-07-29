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
echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
echo '<pre>$posmen='; print_r($posmen); echo '</pre>';
#----------------------------------------------------------------------------------------------------
$ssm = $datessm = $lesenberniaga = $datelesenberniaga = $suntikan = $sijilpmakanan = 'yes';
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
		foreach($_POST as $jadual => $k1):
			if (is_array($k1) || is_object($k1))
			{# mula - pastikan $k1 wujud
				foreach($k1 as $kekunci => $papar):
					if($jadual == $myTable)
						$posmen[$myTable][$kekunci] = bersih($papar);
				endforeach;
			}# tamat - pastikan $_POST wujud
		endforeach;
		//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		return array($posmen,$myTable); # pulangkan nilai
	}
#----------------------------------------------------------------------------------------------------