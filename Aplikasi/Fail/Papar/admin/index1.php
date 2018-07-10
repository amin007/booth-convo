<?php
include 'atasbawah1/diatas.php';
include 'atasbawah1/menu_atas.php';
?>
<div class="content"><!-- mula template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

<hr><h1>Admin - Kita Tanya Apa Khabar</h1><hr>
<p><?php
$Sesi = new \Aplikasi\Kitab\Sesi();
$Sesi->init();
//echo '<pre>'; print_r($_SESSION) . '</pre>';
echo 'namaPendek=' . $Sesi->get('namaPendek') . '<br>';
echo 'namaPenuh=' . $Sesi->get('namaPenuh') . '<br>';
echo 'email=' . $Sesi->get('email') . '<br>';
echo 'levelPengguna=' . $Sesi->get('levelPengguna') . '';//*/
?></p>
<a class="btn btn-primary btn-large" href="<?php echo URL ?>admin/logout">Pergi Lebih Jauh<i class="fa fa-binoculars fa-2x"></i></a>
<!-- / class="hero-unit" -->
<!-- / class="container" -->
<!-- tamat template 
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
</div><!-- / class="content" --

<?php
include 'atasbawah1/dibawah.php';
?>