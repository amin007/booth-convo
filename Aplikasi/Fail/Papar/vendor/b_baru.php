<?php
# pilih paparan ke bawah atau melintang
$pilihJadual = 'jadual_bootstrap';

# untuk debug kod
//echo '<pre>$carian='; print_r($this->carian); echo '</pre>';
//echo '<pre>$senarai='; print_r($this->senarai); echo '</pre>';

# include fail berkaitan
include 'atasbawah0/diatas.php';
include 'atasbawah0/menu_atas.php';
?>

<div class="container-fluid"><!-- mula template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

<div class="row">
<div class="col-md-12">
<?php
$tajukjadual = 'Ubah Data';
include 'jadual/pilih_a_tajuk.php';
include 'b_baru/b02_ulangjadual.php';
echo "\n\n";
?><!-- / class="card" -->
</div><!-- / class="col-md-3" -->
</div><!-- / class="row" -->

<!-- tamat template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
</div><!-- / class="container-fluid" -->
<?php
include 'atasbawah0/dibawah.php';
?>