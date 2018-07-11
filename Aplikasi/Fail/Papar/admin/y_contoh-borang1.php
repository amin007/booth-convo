<?php
//https://getbootstrap.com/docs/4.1/components/input-group/
//echo '<pre>$this->medan:'; print_r($this->medan); echo '</pre>';
$html = new Aplikasi\Kitab\Borang01_Tambah;
$tata = new Aplikasi\Kitab\Tatasusunan;
$a = $tata->senaraiMedan($this->_pilih);
//$aksi = URL . $this->_method . '/ubahSimpan/' . $this->carian[0];
$aksi =  URL . '/borang/insertID/' . $this->_jadual;
$class1 = 'col-sm-7'; # untuk tajuk dan hantar
$class2 = 'col-sm-6'; # untuk $data
$c = null;
$b = $this->_pilih;
//*/?>
<div class="container">
<?php echo $aksi ?>
<form method="POST" action="<?php echo $aksi ?>"><?php echo "\n";
//for ($kira=0; $kira < count($this->medan); $kira++)
//{
	foreach ( $this->medan as $key=>$data )
	{## papar data $row ----------------------------------------------------------
		?><div class="form-group row"><?php echo "\n\t";
		?><label for="inputTajuk" class="col-sm-4 control-label"><?php echo $data
		?></label><?php echo "\n\t";
		?><div class="<?php echo $class2 ?>"><?php
		$paparData = $html->ubahInput($a,$b,$c,$data,$data);
		echo $paparData . "\n\t";
		?></div><!-- / class="<?php echo $class2 ?>" --><?php echo "\n";
		?></div><!-- / class="form-group row" --><?php echo "\n";
	}## --------------------------------------------------------------------------
$html->medanHantar($this->_jadual, $class1);
/*<!-- / class="container" -->*/ ?>
</form><!-- / class="form-horizontal" -->
</div><!-- / class="container" / class="jumbotron" -->