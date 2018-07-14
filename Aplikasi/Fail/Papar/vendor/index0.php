<?php
include 'atasbawah0/diatas.php';
include 'atasbawah0/menu_atas.php';
?>

<div class="container">
<hr><h1>Vendor - Kita Tanya Apa Khabar</h1><hr>
<div class="hero-unit">
<p><?php
$Sesi = new \Aplikasi\Kitab\Sesi();
$Sesi->init();
//echo '<pre>'; print_r($_SESSION) . '</pre>';
echo 'idUser=' . $Sesi->get('idUser') . '<br>';
echo 'namaPendek=' . $Sesi->get('namaPendek') . '<br>';
echo 'namaPenuh=' . $Sesi->get('namaPenuh') . '<br>';
echo 'email=' . $Sesi->get('email') . '<br>';
echo 'levelPengguna=' . $Sesi->get('levelPengguna') . '';//*/
?></p>

	<a class="btn btn-primary btn-large" href="<?php echo URL ?>vendor/logout">Pergi Lebih Jauh<i class="fa fa-binoculars fa-2x"></i></a>

</div><!-- / class="hero-unit" -->
</div><!-- / class="container" -->

<?php
include 'atasbawah0/dibawah.php';
?>