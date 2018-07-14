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
		if($pilih == 'login'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualLogin();
		elseif($pilih == 'product'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualProduct();
		elseif($pilih == 'report'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualReport();
		elseif($pilih == 'website'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualWebsite();
		else: //echo "\$pilih = $pilih <br>";
			$myTable = $medan = $carian= $susun = null;
		endif;

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualLogin()
	{
		list($idUser,$namaPendek) = $this->tanyaDataSesi();
		$myTable = 'login';
		$medan = '`id`,`username`,`fullusername`,/*`password`,*/`level`,'
		. '`email`,`phoneno`,`address1`,`address2`,'
		. '`city`,`postcode`,`state`,`gambar`, id as Action';
		$carian = $susun = null;
		# semak database
			$carian[] = array('fix'=>'x=', # cari x= / %like% / xlike
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => $namaPendek); # benda yang dicari
			/*$carian[] = array('fix'=>'like', # cari x= atau %like%
				'atau'=>'AND', # WHERE / OR / AND
				'medan' => 'level', # cari dalam medan apa
				'apa' => 'admin2'); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualProduct()
	{
		//list($myTable, $medan01, $medan02, $medan) = dpt_senarai('jadual_product');
		$myTable = 'test_product'; $medan = '*, id as Action';
		$carian = $susun = null;
		/*# semak database
			$carian[] = array('fix'=>'xlike', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => 'admin'); # benda yang dicari
			$carian[] = array('fix'=>'like', # cari x= atau %like%
				'atau'=>'AND', # WHERE / OR / AND
				'medan' => 'level', # cari dalam medan apa
				'apa' => 'admin2'); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualReport()
	{
		//list($myTable, $medan01, $medan02, $medan) = dpt_senarai('jadual_report');
		$myTable = 'test_report'; $medan = '*, id as Action';
		$carian = $susun = null;
		/*# semak database
			$carian[] = array('fix'=>'xlike', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => 'admin'); # benda yang dicari
			$carian[] = array('fix'=>'like', # cari x= atau %like%
				'atau'=>'AND', # WHERE / OR / AND
				'medan' => 'level', # cari dalam medan apa
				'apa' => 'admin2'); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualWebsite()
	{
		//list($myTable, $medan01, $medan02, $medan) = dpt_senarai('jadual_report');
		$myTable = 'test_website';
		$medan = '`website_id`,`website_name`,`website_link`,`note`,`website_id` as Action';
		$carian = $susun = null;
		/*# semak database
			$carian[] = array('fix'=>'xlike', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => 'username', # cari dalam medan apa
				'apa' => 'admin'); # benda yang dicari
			$carian[] = array('fix'=>'like', # cari x= atau %like%
				'atau'=>'AND', # WHERE / OR / AND
				'medan' => 'level', # cari dalam medan apa
				'apa' => 'admin2'); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	public function tambahPembolehubah($pilih)
	{
		//$pilih = null;
		if($pilih == 'login'): //echo "\$pilih = $pilih <br>";
			$myTable = 'login';
		elseif($pilih == 'product'): //echo "\$pilih = $pilih <br>";
			$myTable = 'test_product';
		elseif($pilih == 'report'): //echo "\$pilih = $pilih <br>";
			$myTable = 'test_report';
		elseif($pilih == 'website'): //echo "\$pilih = $pilih <br>";
			$myTable = 'test_website';
		else: //echo "\$pilih = $pilih <br>";
			$myTable = null;
		endif;

		return array($myTable); # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#=====================================================================================================
}