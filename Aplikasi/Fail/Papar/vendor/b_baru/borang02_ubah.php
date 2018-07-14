<?php
//https://getbootstrap.com/docs/4.1/components/input-group/
$html = new Aplikasi\Kitab\Borang02_Ubah;
$aksi =  URL . 'borang/updateID/' . $this->_jadual;
$class1 = 'col-sm-7'; # untuk tajuk dan hantar
$class2 = 'col-sm-7'; # untuk $data
//*/?>
<div class="container">
<h5><?php echo $aksi ?></h5>
<form method="POST" action="<?php echo $aksi ?>"><?php echo "\n";
for ($kira=0; $kira < count($row); $kira++):
	foreach ( $row[$kira] as $key=>$data )
	{## papar data $row ----------------------------------------------------------
		?><div class="form-group row"><?php echo "\n\t";
		?><label for="inputTajuk" class="col-sm-2 control-label"><?php echo $key
		?></label><?php echo "\n\t";
		?><div class="<?php echo $class2 ?>"><?php  echo "\n\t\t";
		$paparData = $html->ubahInput2(null, $this->_jadual,
			$kira, $key, $data);
		echo $paparData . "\n\t";
		?></div><!-- / class="<?php echo $class2 ?>" --><?php echo "\n";
		?></div><!-- / class="form-group row" --><?php echo "\n";
	}## --------------------------------------------------------------------------
endfor;
$html->medanHantar($this->_jadual, $class1);
/*<!-- / class="container" -->*/ ?>
</form><!-- / class="form-horizontal" -->
</div><!-- / class="container" / class="jumbotron" -->