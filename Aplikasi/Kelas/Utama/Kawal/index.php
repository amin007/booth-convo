<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Index extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##------------------------------------------------------------------------------------------
	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		$fail = array('index','login','login_automatik');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[1], $noInclude=1);
	}
##------------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##------------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
##------------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================
#------------------------------------------------------------------------------------------
	public function home()
	{#"index.html" **Home**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function aboutbooth()
	{#  "aboutbooth.html" **About Booth**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function organization()
	{# About - "organization.html" **Organization**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function registeration()
	{# Exhibitors - "registeration.html" **Registeration**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function boothfees()
	{# Exhibitors - "boothfees.html" **Booth Fees**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function floorplan()
	{# Exhibitors - "floorplan.html" **Floor Plan**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function rulesregulations()
	{# Exhibitors - "rulesregulations.html" **Rules & Regulations**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function gallery()
	{# "gallery.html" **Gallery**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function contact()
	{# "contact.html" **Contact**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function login()
	{#Account - "login.php" **Sign In**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
	public function registeration()
	{# Account - "registeration.php" **Sign Up**
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$fail = array('index','login','login_automatik');
		$fail = array('index');
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}