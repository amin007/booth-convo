<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Borang_Tanya extends \Aplikasi\Kitab\Tanya
{
#=====================================================================================================
	public function __construct()
	{
		parent::__construct();
	}
#---------------------------------------------------------------------------------------------------#
	function data_contoh($pilih)
	{
		$data = array(
			'namaPendek' => 'james007',
			'namaPenuh' => 'Polan Bin Polan',
			'level' => 'pelawat'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
	public function semakPost($myTable, $senarai)
	{
		# validasi data $_POST, masuk dalam $posmen, validasi awal
		foreach ($_POST as $myTable => $value):
			if ( in_array($myTable,$senarai) ):
				foreach ($value as $key => $value2):
					//echo '<br>$key : ' . $key; echo '<br>$value2 : ' . $value2;
					foreach ($value2 as $kekunci => $papar):
						$posmen[$myTable][0][$kekunci] = bersih($papar);
						//echo "$kekunci<br>";//*/
				endforeach; endforeach;
				$posmen = $this->tukarHuruf($myTable, $posmen);
			endif;
		endforeach;

		return $posmen; # pulangkan pemboleubah
	}
#---------------------------------------------------------------------------------------------------#
	public function ubahPosmen($posmen, $myTable)
	{
		# set pemboleubah Password dan Level
		list($password, $level) = $this->setPasswordLevel($posmen, $myTable);

		$cantum = '';
		$senaraiData = array();
		foreach ($posmen as $key => $value1):
			foreach ($value1[0] as $key2 => $dataS): //echo $key2 . '<br>';
				$cantum .= ($key2 == 'password1') ? ($password) . "', '"
					:(	($key2 == 'password2') ? ($level) . "', '"
					: ($dataS) . "', '");
			endforeach;
		endforeach;

		$senaraiData[0] = "('" . $cantum . "')";
		$senaraiData[0] = substr($senaraiData[0], 0, -5) . ')';
		//$this->semakPembolehubah($senaraiData);

		return $senaraiData; # pulangkan pemboleubah
	}
#---------------------------------------------------------------------------------------------------#
	function setPasswordLevel($posmen, $myTable)
	{
		$password1 = $posmen[$myTable][0]['password1'];
		$password2 = $posmen[$myTable][0]['password2'];
		$password = ($password1 == $password2) ? $password1: NULL;
		$password = \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $password);
		$level = 'vendor';

		return array($password, $level);
	}
#---------------------------------------------------------------------------------------------------#
	function ubahsuaiPost($medanID, $dataID, $senaraiJadual, $pass)
	{
		$posmen = array();
		foreach ($_POST as $myTable => $value): 
		if ( in_array($myTable,$senaraiJadual) ):
			foreach ($value as $kekunci => $papar)
			{
				$posmen[$myTable][$kekunci] = bersih($papar);
				$posmen[$myTable][$medanID] = $dataID;
			}//*/
		endif; endforeach;

		//echo '<pre>$senaraiJadual='; print_r($senaraiJadual); echo '</pre>';
		//echo '<pre>$medanID='; print_r($medanID); echo '</pre>';
		//echo '<pre>$dataID='; print_r($dataID); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		$posmen = $this->pecah5P($senaraiJadual[0], $posmen);
		//$posmen = $this->kira5P($senaraiJadual[0], $posmen);
		$posmen = $this->tukarHuruf($senaraiJadual[0], $posmen);
		$posmen = $this->tambahAksara($senaraiJadual[0], $posmen);
		$posmen = $this->tarikh($senaraiJadual[0], $posmen);
		return $posmen = $this->tanya->semakPosmen(
			$senaraiJadual[0], $posmen, $pass);
	}
#---------------------------------------------------------------------------------------------------#
	function pecah5P($myTable, $posmen) 
	{
		$pecah5P = $posmen[$myTable]['pecah5P']; 

		if (!empty($pecah5P))
		{
			$pos = explode(" ", $pecah5P);
			  $posmen[$myTable]['hasil'] = str_replace( ',', '', bersih($pos[0]) );
			$posmen[$myTable]['belanja'] = str_replace( ',', '', bersih($pos[1]) );
			   $posmen[$myTable]['gaji'] = str_replace( ',', '', bersih($pos[2]) );
			   $posmen[$myTable]['aset'] = str_replace( ',', '', bersih($pos[3]) );
			   $posmen[$myTable]['staf'] = str_replace( ',', '', bersih($pos[4]) );
			   $posmen[$myTable]['stok'] = str_replace( ',', '', bersih($pos[5]) );
		}
		else
		{
			//$data5P = array('hasil','belanja','gaji','aset','staf','stok');
			$data5P = array('hasil','belanja','gaji','aset','staf','stok',
				'amt_staf','amt_output','amt_input','amt_aset','amt_gaji',
				'amt_jualan','amt_hasil','amt_belanja');
			foreach ($posmen as $jadual => $value)
			foreach ($value as $kekunci => $papar)
				$posmen[$myTable][$kekunci] =
					( in_array($kekunci,$data5P) ) ?
					str_replace( ',', '', bersih($papar) )# buang koma
					: bersih($papar);
		}

		unset($posmen[$myTable]['pecah5P']);

		/*# debug
		echo '<pre>$hasil='; print_r($hasil); echo '</pre>';
		echo '<pre>$pos='; print_r($pos); echo '</pre>';
		echo '<pre>$posmen2='; print_r($posmen); echo '</pre>';//*/

		return $posmen; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function kira5P($myTable, $posmen)
	{
		$data5P = array('hasil','belanja','gaji','aset','staf','stok');
		$mengira = null;
		foreach ($data5P as $kekunci)
		if (isset($posmen[$myTable][$kekunci]))
		{
			//echo '<br>' . $kekunci .'|'. $posmen[$myTable][$kekunci];
			//@eval( '$mengira = (' . $posmen[$myTable][$kekunci] . ');' );
			$mengira = ($posmen[$myTable][$kekunci]);
			$posmen[$myTable][$kekunci] = $mengira;
			$mengira = null;
		}

		return $posmen; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function tukarHuruf($myTable, $posmen)
	{//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
		$huruf['kecil'] = array('namevendor','address1','address2','city','state');
		$huruf['BESAR'] = array('respon');
		$huruf['Depan'] = array('namevendor','address1','address2','city','state');
		//echo '<pre>$huruf->:<br>';	print_r($huruf); echo '</pre>|';
	
		foreach ($huruf as $jenis=>$key): foreach ($key as $v=>$kekunci):
		if (isset($posmen[$myTable][0][$kekunci])):
			if ($jenis == 'kecil') # huruf('kecil', )
				$posmen[$myTable][0][$kekunci] = huruf('kecil', $posmen[$myTable][0][$kekunci]);
			if ($jenis == 'BESAR') # huruf('Besar', )
				$posmen[$myTable][0][$kekunci] = huruf('Besar', $posmen[$myTable][0][$kekunci]);
			if ($jenis == 'Depan') # huruf('Besar_Depan', )
				$posmen[$myTable][0][$kekunci] = huruf('Besar_Depan', $posmen[$myTable][0][$kekunci]);
		endif; endforeach; endforeach; //echo '<hr><hr>';

		return $posmen; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function tambahAksara($myTable, $posmen)
	{
		$aksara['angkasa'] = array('fe');

		foreach ($aksara as $jenis=>$key): foreach ($key as $v=>$kekunci):
		if (isset($posmen[$myTable][$kekunci])):
			if ($jenis == 'angkasa') #  str_replace('_','&nbsp;', $asal);
				$posmen[$myTable][$kekunci] = str_replace(' ','-',
					$posmen[$myTable][$kekunci]);
		endif; endforeach; endforeach; //echo '<hr><hr>';

		return $posmen; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function tarikh($myTable, $posmen)
	{
		$tarikh = array('lawat','terima','hantar','hantar_prosesan');

		foreach ($tarikh as $kekunci)
		if (isset($posmen[$myTable][$kekunci . 'X']))
		{
			//echo '<br>' . $kekunci . 'X|' . $posmen[$myTable][$kekunci . 'X'];
			//echo '<br>' . $kekunci . ' |' . $posmen[$myTable][$kekunci];
			$posmen[$myTable][$kekunci] = null;
			unset($posmen[$myTable][$kekunci . 'X']);
		}

		return $posmen; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#=====================================================================================================
}