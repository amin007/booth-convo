<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Vendor_Tanya extends \Aplikasi\Kitab\Tanya
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
	public function tanyaDataSesi()
	{
		$dataSulit = new \Aplikasi\Kitab\Sesi();
		//echo '<pre>'; print_r($_SESSION) . '</pre>';
		$idUser = $dataSulit->get('idUser');
		$namaPendek = $dataSulit->get('namaPendek');
		/*echo 'idUser=' . $dataSulit->get('idUser') . '<br>';
		echo 'namaPendek=' . $dataSulit->get('namaPendek') . '<br>';
		echo 'namaPenuh=' . $dataSulit->get('namaPenuh') . '<br>';
		echo 'email=' . $dataSulit->get('email') . '<br>';
		echo 'levelPengguna=' . $dataSulit->get('levelPengguna') . '';
		echo '<hr>';//*/

		return array($idUser,$namaPendek);
	}
#---------------------------------------------------------------------------------------------------#
	public function susunPembolehubah($pilih)
	{
		//$pilih = null;
		if($pilih == 'profile'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualProfile();
		elseif($pilih == 'product'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualProduct();
		elseif($pilih == 'report'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualReport();
		elseif($pilih == 'status'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualStatus();
		elseif($pilih == 'booking'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualBooking();
		elseif($pilih == 'website'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualWebsite();
		else: //echo "\$pilih = $pilih <br>";
			$myTable = $medan = $carian= $susun = null;
		endif;

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualProfile()
	{
		list($idUser,$namaPendek) = $this->tanyaDataSesi();
		$myTable = 'login';
		$medan = '`id`,`username`,`fullusername`,`password`,`level`,'
		. '`email`,`phoneno`,`address1`,`address2`,'
		. '`city`,`postcode`,`state`,`gambar`';
		$carian = $susun = null;
		# semak database
			$carian[] = array('fix'=>'x=', # cari x= / %like% / xlike
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => $namaPendek); # benda yang dicari

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualProduct()
	{
		$myTable = 'test_product'; $medan = 'id as Action,*';
		$carian = $susun = null;
		/*# semak database
			$carian[] = array('fix'=>'xlike', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => 'admin'); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualReport()
	{
		$myTable = 'test_report'; $medan = 'id as Action,*';
		$carian = $susun = null;
		/*# semak database
			$carian[] = array('fix'=>'xlike', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => 'admin'); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualStatus()
	{
		list($idUser,$namaPendek) = $this->tanyaDataSesi();
		$myTable = 'test_status_result'; $medan = '*';
		$carian = $susun = null;
		# semak database
			$carian[] = array('fix'=>'x=', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'idUser', # cari dalam medan apa
				'apa' => $idUser); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualBooking()
	{
		list($idUser,$namaPendek) = $this->tanyaDataSesi();
		$myTable = 'test_booking_criteria'; $medan = '*';
		$carian = $susun = null;
		# semak database
			$carian[] = array('fix'=>'x=', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'idUser', # cari dalam medan apa
				'apa' => $idUser); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualWebsite()
	{
		$myTable = 'test_website';
		$medan = '`website_id` as Action,`website_id`,`website_name`,`website_link`,`note`';
		$carian = $susun = null;
		/*# semak database
			$carian[] = array('fix'=>'xlike', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => 'admin'); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	public function tambahPembolehubah($pilih)
	{
		//$pilih = null;
		if($pilih == 'profile'): //echo "\$pilih = $pilih <br>";
			$myTable = 'login';
		elseif($pilih == 'product'): //echo "\$pilih = $pilih <br>";
			$myTable = 'test_product';
		elseif($pilih == 'report'): //echo "\$pilih = $pilih <br>";
			$myTable = 'test_report';
		elseif($pilih == 'booking'): //echo "\$pilih = $pilih <br>";
			$myTable = 'test_booking_criteria';
		elseif($pilih == 'website'): //echo "\$pilih = $pilih <br>";
			$myTable = 'test_website';
		else: //echo "\$pilih = $pilih <br>";
			$myTable = null;
		endif;

		return array($myTable); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	public function pilihJadual($pilih)
	{
		//$pilih = null;
		if($pilih == 'profile'): //echo "\$pilih = $pilih <br>";
			$t = 'login'; $m = 'username';
		elseif($pilih == 'product'): //echo "\$pilih = $pilih <br>";
			$t = 'test_product'; $m = 'id';
		elseif($pilih == 'report'): //echo "\$pilih = $pilih <br>";
			$t = 'test_report'; $m = 'id';
		elseif($pilih == 'booking'): //echo "\$pilih = $pilih <br>";
			$t = 'test_booking_criteria'; $m = 'id';
		elseif($pilih == 'website'): //echo "\$pilih = $pilih <br>";
			$t = 'test_website'; $m = 'id';
		else: //echo "\$pilih = $pilih <br>";
			$t = null; $m = null;
		endif;

		return array(array($t),$m); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
#=====================================================================================================
}