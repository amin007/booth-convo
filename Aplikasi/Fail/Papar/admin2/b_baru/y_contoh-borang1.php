<?php
//https://getbootstrap.com/docs/4.1/components/input-group/
//echo '<pre>$this->medan:'; print_r($this->medan); echo '</pre>';
$html = new Aplikasi\Kitab\Borang01_Tambah;
//$aksi = URL . $this->_method . '/ubahSimpan/' . $this->carian[0];
$aksi =  URL . 'admin2/insertID/' . $this->_jadual;
$class1 = 'col-sm-7'; # untuk tajuk dan hantar
$class2 = 'col-sm-7'; # untuk $data
//*/?>
<div class="container">
<h5><?php echo $aksi ?></h5>
<form method="POST" action="<?php echo $aksi ?>"><?php echo "\n";
foreach ( $this->medan as $key=>$data )
{## papar data $row ----------------------------------------------------------
	list($type,$pri) = explode('|', $data);
	if($pri == 'PRI'): echo '';
	else:
	?><div class="form-group row"><?php echo "\n\t";
	?><label for="inputTajuk" class="col-sm-2 control-label"><?php echo $key
	?></label><?php echo "\n\t";
	?><div class="<?php echo $class2 ?>"><?php  echo "\n\t\t";
	$paparData = $html->baruInput($this->_jadual,$key,$data,$type,$pri);
	echo $paparData . "\n\t";
	?></div><!-- / class="<?php echo $class2 ?>" --><?php echo "\n";
	?></div><!-- / class="form-group row" --><?php echo "\n";
	endif;
}## --------------------------------------------------------------------------
$html->medanHantar($this->_jadual, $class1);
/*<!-- / class="container" -->*/ ?>
</form><!-- / class="form-horizontal" -->
</div><!-- / class="container" / class="jumbotron" -->