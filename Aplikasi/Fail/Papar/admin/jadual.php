<?php
# pilih paparan ke bawah atau melintang
$pilihJadual = 'jadual_bootstrap';
//echo '<pre>$carian='; print_r($this->carian); echo '</pre>';
//echo '<pre>$senarai='; print_r($this->senarai); echo '</pre>';
/*# papar hasil carian
$cari1 = '&nbsp;|&nbsp;'; $cari2 = '';
foreach ($this->carian as $kunci => $nilai)
	$cari1 .= ( count($this->carian)==0 ) ? $nilai : $nilai . ' | ';
foreach ($this->senarai as $kunci2 => $nilai2)
	$cari2 .= ( count($nilai2)==0 ) ? $kunci2 . " = Kosong<br>\r"
	: $kunci2 . ' = ' . count($nilai2) . "<br>\r";
echo "Anda mencari = $cari1\r<br>$cari2\r<hr>";//*/

include 'atasbawah1/diatas.php';
include 'atasbawah1/menu_atas.php';

?>
<div class="content"><!-- mula template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- div class="card"><?php
//include 'z_template-admin.php';
?>
</div> -- / class="card" -->
<div class="card">
<?php
//include 'jadual/template_atas.php';
include 'jadual/template_' . $this->template . '.php';
echo "\n\n";
?>
</div><!-- / class="card" -->
</div><!-- / class="col-md-12" -->
</div><!-- / class="row" -->
</div><!-- / class="container-fluid" -->
<!-- tamat template 
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
</div><!-- / class="content" --
<?php
include 'atasbawah1/dibawah.php';
