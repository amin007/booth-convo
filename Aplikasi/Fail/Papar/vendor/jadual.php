<?php
# pilih paparan ke bawah atau melintang
$pilihJadual = 'jadual_bootstrap';
//echo '<pre>$carian='; print_r($this->carian); echo '</pre>';
//echo '<pre>$senarai='; print_r($this->senarai); echo '</pre>';

include 'atasbawah0/diatas.php';
include 'atasbawah0/menu_atas.php';
?>

<div class="container-fluid"><!-- mula template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<div class="row">
<div class="col-md-12">
<?php
//include 'jadual/z_template-graf.php';
//include 'z_template-login.php';
//include 'z_template-admin.php';
?>
</div><!-- / class="col-md-12" -->
</div><!-- / class="row" -->

<div class="row">
<div class="col-md-12">
<?php
include 'jadual/template_' . $this->template . '.php';
?>
</div><!-- / class="col-md-12" -->
</div><!-- / class="row" -->

<!-- tamat template 
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
</div><!-- / class="container-fluid" -->
<?php
include 'atasbawah0/dibawah.php';
