<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Borang extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##-----------------------------------------------------------------------------------------
	public function index()
	{
		# Set pemboleubah utama
		$this->papar->menuatas = 'tak';
		$this->papar->TajukBesar = 'Sila Login';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
	}
##-----------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude = 0)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##-----------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
##-----------------------------------------------------------------------------------------
	public function semakPost()
	{
		echo '<pre>Test $_POST->:<br>';	print_r($_POST); echo '</pre>|';
	}
##-----------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================
#------------------------------------------------------------------------------------------
	public function daftarpengguna()
	{
		# debug $_POST #$this->semakPost();
		# Set pemboleubah utama
		list($myTable, $medan01, $medan02, $medan) = dpt_senarai('jadual_login');
		//$this->semakSenarai($myTable, $medan01, $medan02, $medan);
		$senarai = array($myTable);
		# Bentuk tatasusunan
		$posmen = $this->tanya->semakPOST($myTable, $senarai);
		$senaraiData = $this->tanya->ubahPosmen($posmen, $myTable);//*/

		# sql insert
		//$this->tanya->buatSqlJadual($myTable, $medan);
		//$this->tanya->tambahSqlBanyakNilai($myTable, $medan, $senaraiData);
		$this->tanya->tambahBanyakNilai($myTable, $medan, $senaraiData);
		$this->log_sql($myTable, $medan, $senaraiData);
		# Semak data
			//$this->semakPost();
			//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';
			//echo '<pre>$senaraiData='; print_r($senaraiData); echo '</pre>';

		# Pergi papar kandungan
		//$lokasi = '';
		//echo '<br>location: ' . URL . $lokasi;
		header('location: ' . URL); //*/
	}
#------------------------------------------------------------------------------------------
	function log_sql($myTable, $medan, $senaraiData)
	{
		# log sql
		$jadual2 = 'log_sql';
		$pengguna = 'index/registeration';
		$log['pengguna'] = $pengguna;
		$log['sql'] = $this->tanya->tambahArahanSqlBanyakNilai($myTable, $medan, $senaraiData);
		$log['arahan'] = 'tambah user baru level vendor';
		$log['tarikhmasa'] = date("Y-m-d H:i:s");
		$this->tanya->tambahData
		//$this->tanya->tambahSql
			($jadual2, $log);
	}
#------------------------------------------------------------------------------------------
	function semakSenarai($myTable, $medan01, $medan02, $medan)
	{
		echo '<br>$myTable : ' . $myTable;
		echo '<br>$medan01 : ' . $medan01;
		echo '<br>$medan02 : ' . $medan02;
		echo '<br>$medan : '; $this->semakPembolehubah($medan);
		echo '<br>';
	}
#------------------------------------------------------------------------------------------
	function salah()
	{
		# debug
		//$this->tanya->dapatid($_POST['password']);
		$this->papar->mesej = 'Ada masalah pada user dan password';

		# Set pemboleubah utama
		$this->papar->sesat = 'Enjin Carian - Sesat';
		$this->papar->isi = '';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan('index', 'salah', $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	function semakid()
	{
		# debug $_POST
		//echo '<pre>Test $_POST->'; print_r($_POST) . '</pre>';

		# semak data $this->tanya->ujiID(); 
		//$this->tanya->semakid();
		$this->loginid();
		//*/
	}
#------------------------------------------------------------------------------------------
	function login()
	{
		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan('index', 'login2', $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	function loginid()
	{
		# semak data $_POST
		list($myTable, $medan01, $medan02, $medan) = dpt_senarai('jadual_login');
		$email = $_POST['username'];
		$passwordAsal = $_POST['password'];
		$password = \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $passwordAsal);
		# semak database
			$carian[] = array('fix'=>'like', # cari x= atau %like%
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => $medan01, # cari dalam medan apa
				'apa' => $email); # benda yang dicari
			$carian[] = array('fix'=>'like', # cari x= atau %like%
				'atau'=>'AND', # WHERE / OR / AND
				'medan' => $medan02, # cari dalam medan apa
				'apa' => $password); # benda yang dicari
		# mula cari $cariID dalam $myJadual
			$cariNama =
				$this->tanya->cariSemuaData("`$myTable`", $medan, $carian, null);
				//$this->tanya->cariSql("`$myTable`", $medan, $carian, null);
				$kira = sizeof($cariNama);//*/
		# semak pembolehubah
		//echo '<pre>Test $_POST->'; print_r($_POST); echo '</pre>';
		//echo '<pre>password->'; print_r($password); echo '</pre>';
		//echo '<pre>$cariNama::'; print_r($cariNama); echo '</pre>';
		//echo '<hr>$data->' . sizeof($cariNama) . '<hr>';

		$this->kunciPintu($kira, $cariNama); # pilih pintu masuk
	}
#------------------------------------------------------------------------------------------
	function kunciPintu($kira, $data)
	{
		if ($kira == 1) 
		{	# login berjaya
			\Aplikasi\Kitab\Sesi::init(); # setkan $_SESSION utk 
			# username,fullusername,email,kataLaluan,level
			\Aplikasi\Kitab\Sesi::set('namaPendek', $data[0]['username']);
			\Aplikasi\Kitab\Sesi::set('namaPenuh', $data[0]['fullusername']);
			\Aplikasi\Kitab\Sesi::set('email', $data[0]['email']);
			\Aplikasi\Kitab\Sesi::set('levelPengguna', $data[0]['level']);
			\Aplikasi\Kitab\Sesi::set('loggedIn', true);
			//echo '<hr>Berjaya';
			$this->levelPengguna($kira, $data, $data[0]['level']);
		} 
		else # login gagal
		{	echo '<hr>Tidak Berjaya';
			header('location:' . URL . 'login/salah');
		}//*/
	}
#------------------------------------------------------------------------------------------
	function levelPengguna($kira, $data, $level)
	{
		//header('location:' . URL . 'ruangtamu');
		if ($level == 'admin')
			header('location:' . URL . 'admin');
		elseif ($level == 'admin2')
			header('location:' . URL . 'admin2');
		elseif ($level == 'vendor')
			header('location:' . URL . 'vendor');
		else
			header('location:' . URL . ''); //*/
	}
#------------------------------------------------------------------------------------------
	public function ubah($myTable, $medanID, $dataID)
	{
		# Set pemboleubah utama
		//echo '<hr> Nama class : ' . namaClass($this) . '<hr>';
		list($myTable, $medan, $carian, $susun) =
			$this->tanya->susunPembolehubah($myTable, $medanID, $dataID);
		$this->papar->senarai[$myTable] = $this->tanya->
			cariSemuaData //cariSql
			($myTable, $medan, $carian, $susun);
		# Set pembolehubah untuk Papar
		$this->kandunganPaparanUbah($myTable, $medanID, $dataID);

		# Pergi papar kandungan
		$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('b_ubah'); $this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	function kandunganPaparanUbah($myTable, $medanID, $dataID)
	{
		list($myTable, $medan, $carian, $susun) =
			$this->tanya->susunPembolehubah($myTable, $medanID, $dataID);
		$this->papar->myTable = $myTable;
		//$this->papar->carian = $carian;
		$this->papar->c1 = $this->papar->c2 = null;
		//$this->papar->template = 'biasa';
		//$this->papar->template = 'bootstrap_table';
		//$this->papar->template = 'bootstrap';
		$this->papar->template = 'khas01';
		//*/
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}