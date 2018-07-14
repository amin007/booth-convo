<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Vendor extends \Aplikasi\Kitab\Kawal
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
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		//$this->panggilDB('login'); # panggil fungsi panggilDB

		# Pergi papar kandungan
		$fail = array('index0'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
##-----------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
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
	public function semakRujuk($senarai)
	{
		//echo '<pre>$senarai:<br>';
		print_r($senarai);
		//echo '</pre>|';//*/
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
#-------------------------------------------------------------------------------------------
	function debugKandunganPaparan()
	{
		echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		echo '<pre>';
		echo '<br>$this->papar->senarai : '; print_r($this->papar->senarai);
		echo '<br>$this->papar->myTable : '; print_r($this->papar->myTable);
		echo '<br>$this->papar->_jadual : '; print_r($this->papar->_jadual);
		echo '<br>$this->papar->carian : '; print_r($this->papar->carian);
		echo '<br>$this->papar->c1 : '; print_r($this->papar->c1);
		echo '<br>$this->papar->c2 : '; print_r($this->papar->c2);
		echo '<br>$this->papar->medan : '; print_r($this->papar->medan);
		echo '<br>$this->papar->_pilih : '; print_r($this->papar->_pilih);
		echo '<br>$this->papar->template : '; print_r($this->papar->template);
		echo '</pre>';
	}
#-------------------------------------------------------------------------------------------
	function kandunganPaparan($pilih, $myTable)
	{
		//$this->papar->senarai[$myTable] = null;
		$this->papar->myTable = $myTable;
		$this->papar->_jadual = $myTable;
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
	function panggilDB($pilih)
	{
		# Set pembolehubah utama
		list($myTable, $medan, $carian, $susun) = $this->tanya->susunPembolehubah($pilih);
		$this->papar->senarai[$myTable] = $this->tanya->//cariSql
			cariSemuaData
			($myTable, $medan, $carian, $susun);
		if( count($this->papar->senarai[$myTable]) == 0 ):
			//echo 'jumlah $senarai kosong';
			$this->papar->senarai[$myTable] = null;
		endif;//*/
		# Set pembolehubah untuk Papar
		$this->kandunganPaparan($pilih, $myTable);
		//$this->debugKandunganPaparan($pilih, $myTable);
	}
#-------------------------------------------------------------------------------------------
	function tambahMedanDB($pilih)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		list($myTable) = $this->tanya->tambahPembolehubah($pilih);
		$this->papar->medan = $this->tanya->//paparMedan
			//paparMedan02 //pilihMedan //pilihMedan02
			pilihMedan02($myTable);//*/

		# Set pembolehubah untuk Papar
		$this->papar->_jadual = $myTable;
		//$this->papar->medan = array('website_name','website_link','note');
	}
#-------------------------------------------------------------------------------------------
	public function updateID($pilih)
	{
		# ubahsuai $posmen
		list($posmen,$senaraiJadual,$myTable,$medanID) = $this->ubahsuaiPost($pilih);
		//echo '<br>$dataID=' . $dataID . '<br>';
		//echo '<pre>$_POST='; print_r($_POST); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		# mula ulang $senaraiJadual
		foreach ($senaraiJadual as $kunci => $jadual)
		{# mula ulang table
			$this->tanya->//ubahSqlSimpan
			ubahSimpan
			($posmen[$jadual], $jadual, $medanID);
		}# tamat ulang table

		# pergi papar kandungan
		$lokasi = 'vendor/profile';
		//echo '<br>location: ' . URL . $lokasi;
		header('location: ' . URL . $lokasi); //*/
	}
#-------------------------------------------------------------------------------------------
	function ubahsuaiPost($pilih)
	{
		//list($medanID,$senaraiJadual,$pass,$pass2) = $this->tanya->pilihJadual('login');
		list($senaraiJadual,$medanID) = $this->tanya->pilihJadual($pilih);

		$posmen = array();
		foreach ($_POST as $myTable => $value):
			if ( in_array($myTable,$senaraiJadual) ):
				foreach ($value as $kekunci => $papar)
				{
					$posmen[$myTable][$kekunci] = bersih($papar);
					//$posmen[$myTable][$medanID] = $dataID;
				}
		endif; endforeach;//*/

		//echo '<pre>$senaraiJadual='; print_r($senaraiJadual); echo '</pre>';
		//echo '<pre>$medanID='; print_r($medanID); echo '</pre>';
		//echo '<pre>$dataID='; print_r($dataID); echo '</pre>';
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';

		$posmen = $this->kataLaluanX($senaraiJadual[0], $posmen);
		//$posmen = $this->tanya->semakPosmen($senaraiJadual[0], $posmen, $pass, $pass2);

		return array($posmen,$senaraiJadual,$senaraiJadual[0],$medanID); # pulangkan nilai
	}
#-------------------------------------------------------------------------------------------
	public function kataLaluanX($myTable, $posmen)
	{
		$surat = array('password','kataLaluan');
		foreach ($surat as $kekunci)
		if(isset($posmen[$myTable][$kekunci . 'X']))
			if(empty($posmen[$myTable][$kekunci . 'X'])):
				unset($posmen[$myTable][$kekunci . 'X']);
				unset($posmen[$myTable][$kekunci . '']);
			else:
				unset($posmen[$myTable][$kekunci . 'X']);
		endif;

		return $posmen; # pulangkan nilai
	}
#-------------------------------------------------------------------------------------------
/*	public function staffAdd()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pemboleubah utama
		$this->panggilDB('login'); # panggil fungsi panggilDB
		$this->tambahMedanDB('login'); # panggil medan dalam jadual
		//$this->debugKandunganPaparan();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('b_baru'); //$this->_folder = 'cari';
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
	}//*/
#-------------------------------------------------------------------------------------------
	public function profile()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		$this->panggilDB('login'); # panggil fungsi panggilDB
		//$this->tambahMedanDB('login'); # panggil medan dalam jadual
		//$this->debugKandunganPaparan();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('jadual','b_baru'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[1], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function booking()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		$this->panggilDB('booking'); # panggil fungsi panggilDB
		$this->tambahMedanDB('booking'); # panggil medan dalam jadual
		//$this->debugKandunganPaparan();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('jadual','b_baru'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[1], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function status()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		$this->panggilDB('status'); # panggil fungsi panggilDB

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$fail = array('jadual'); //$this->_folder = 'cari';
		$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
	public function payment()
	{
		echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		//$this->panggilDB('login'); # panggil fungsi panggilDB

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$fail = array('jadual'); //$this->_folder = 'cari';
		//$this->paparKandungan($this->_folder, $fail[0], $noInclude=1);
	}
#-------------------------------------------------------------------------------------------
#==========================================================================================
}