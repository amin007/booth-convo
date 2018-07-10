<?php
# pilih paparan ke bawah atau melintang
//$pilihJadual = 'jadual_am';
$pilihJadual = 'jadual_bootstrap';
//$pilihJadual = 'ubah_medan01'; # borang biodata berasaskan table
//$pilihJadual = 'ubah_medan02'; # borang ubah berasaskan bootstrap

# untuk kod baru
//echo '<pre>$carian='; print_r($this->carian); echo '</pre>';
//echo '<pre>$senarai='; print_r($this->senarai); echo '</pre>';
//echo '<pre>$_cariIndustri='; print_r($this->_cariIndustri); echo '</pre>';
/*# papar hasil carian
$cari1 = '&nbsp;|&nbsp;'; $cari2 = '';
foreach ($this->carian as $kunci => $nilai)
	$cari1 .= ( count($this->carian)==0 ) ? $nilai : $nilai . ' | ';
foreach ($this->senarai as $kunci2 => $nilai2)
	$cari2 .= ( count($nilai2)==0 ) ? $kunci2 . " = Kosong<br>\r"
	: $kunci2 . ' = ' . count($nilai2) . "<br>\r";
echo "Anda mencari = $cari1\r<br>$cari2\r<hr>";//*/

include 'template-admin/diatas.php';
include 'template-admin/menu_atas.php';

?>
<div class="content"><!-- mula template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
<?php
include 'z_template-admin.php';
?>
<?php
//include 'template_atas.php'; 
include 'template_' . $this->template . '.php';
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
include 'template-admin/dibawah.php';
