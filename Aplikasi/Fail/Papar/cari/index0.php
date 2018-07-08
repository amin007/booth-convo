<?php
## untuk papar semua data tanpa mencari guna form
# pilih paparan ke bawah atau melintang
//$pilihJadual = 'jadual_am';
$pilihJadual = 'jadual_bootstrap';
# untuk debug
//echo '<pre>$senarai='; print_r($this->senarai); echo '</pre>';
# jenis template

include 'atasbawah/diatas.php';
include 'atasbawah/menu_atas.php';
include 'template_' . $this->template . '.php';
include 'atasbawah/dibawah.php';
