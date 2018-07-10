<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Admin extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##-----------------------------------------------------------------------------------------
	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajuk = namaClass($this);
		//echo '<hr> Nama class : ' . namaClass($this) . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('index1'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
##-----------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=7);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##-----------------------------------------------------------------------------------------
	public function paparKandungan0($folder, $fail, $noInclude)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
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
	public function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================
#-------------------------------------------------------------------------------------------
	function panggilDB($pilih)
	{
		# Set pembolehubah utama
		list($myTable, $medan, $carian, $susun) = $this->tanya->susunPembolehubah($pilih);
		$this->papar->senarai[$myTable] = $this->tanya->//cariSql
			cariSemuaData
			($myTable, $medan, $carian, $susun);
		if( count($this->papar->senarai[$myTable]) == 0 ):
			//echo 'jumlah $senarai kosong';
			$this->papar->senarai = null;
		endif;
		# Set pembolehubah untuk Papar
		$this->kandunganPaparan($pilih, $myTable);
	}
#-------------------------------------------------------------------------------------------
	function kandunganPaparan($pilih, $myTable)
	{
		/*list($myTable, $medan, $carian, $susun) =
			$this->tanya->susunPembolehubah($pilih);*/
		$this->papar->myTable = $myTable;
		$this->papar->carian[] = 'semua';
		$this->papar->c1 = $this->papar->c2 = null;
		$this->papar->_pilih = $pilih;
		//$this->papar->template = 'biasa';
		$this->papar->template = 'bootstrap_table';
		//$this->papar->template = 'bootstrap';
		//$this->papar->template = 'khas01';
		//*/
	}
#-------------------------------------------------------------------------------------------
	function tambahMedanDB($pilih)
	{
		list($myTable) = $this->tanya->tambahPembolehubah($pilih);
		$this->papar->senarai[$myTable] = $this->tanya->//paparMedan
			//paparMedan02
			//pilihMedan
			pilihMedan02
			($myTable);
		/*if( count($this->papar->senarai[$myTable]) == 0 ):
			//echo 'jumlah $senarai kosong';
			$this->papar->senarai = null;
		endif;//*/
		# Set pembolehubah untuk Papar
		$this->kandunganPaparan($pilih, $myTable);
	}
#-------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------
	public function staffAdd()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pemboleubah utama
		$this->tambahMedanDB('login'); # panggil medan dalam jadual

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('b_baru'); $this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function staffView()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		$this->panggilDB('login'); # panggil fungsi panggilDB

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('jadual'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function productAdd()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pemboleubah utama
		$this->tambahMedanDB('product'); # panggil medan dalam jadual

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('b_baru'); $this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function productView()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		$this->panggilDB('product'); # panggil fungsi panggilDB

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('jadual'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function reportView()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		$this->panggilDB('report'); # panggil fungsi panggilDB

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('jadual'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function websiteView()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pemboleubah utama
		//$this->tambahMedanDB('product'); # panggil medan dalam jadual
		//$this->panggilDB('product'); # panggil fungsi panggilDB

		# untuk add form
		$this->papar->myTable = 'test_website';
		$this->papar->medan = array('website_name','website_link','note');
		$medan = '`website_id`,`website_name`,`website_link`,`note`';
		# untuk list data dari myTable
			/*$carian[] = array('fix'=>'x=','atau'=>'WHERE',
			'medan'=>'delete_status','apa'=>'0');*/
			$this->papar->senarai[$this->papar->myTable] = $this->tanya->
				//cariSql(
				cariSemuaData(
				$this->papar->myTable, $medan, NULL, NULL);

		# Pergi papar kandungan
		$this->kandunganPaparan('website',$this->papar->myTable);
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('z_form-list-website'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
#==========================================================================================
}