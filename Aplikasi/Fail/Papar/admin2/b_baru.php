<?php
# pilih paparan ke bawah atau melintang
$pilihJadual = 'jadual_bootstrap';
include 'atasbawah1/diatas.php';
include 'atasbawah1/menu_atas.php';
?>

<div class="content"><!-- mula template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<div class="container-fluid">

<?php
include 'b_baru/z_template-3ruang.php';
echo "\n\n";
?>
<div class="row">
<div class="col-md-12">
<div class="card"><?php
//include 'y_website-form.php';
$tajukjadual = 'Daftar Baru';
include 'jadual/pilih_a_tajuk.php';
include 'b_baru/y_contoh-borang1.php';
echo "\n\n";
?></div><!-- / class="card" -->
</div><!-- / class="col-md-3" -->
</div><!-- / class="row" -->

<div class="row">
<div class="col-md-12">
<div class="card"><?php
//include 'jadual/template_' . $this->template . '.php';
echo '<br>$this->_jadual:' . $this->_jadual;
echo '<br>$this->myTable:' . $this->myTable;
?></div><!-- / class="card" -->
</div><!-- / class="col-md-12" -->
</div><!-- / class="row" -->

</div><!-- / class="container-fluid" -->
<!-- tamat template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
</div><!-- / class="content" --
<?php
include 'atasbawah1/dibawah.php';
?>