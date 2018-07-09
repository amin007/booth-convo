<?php
# pilih paparan ke bawah atau melintang
//$pilihJadual = 'jadual_am';
//$pilihJadual = 'ubah_medan01'; # borang biodata berasaskan table
$pilihJadual = 'ubah_medan02'; # borang ubah berasaskan bootstrap

# untuk debug $this->papar
/*echo '<pre>';
echo '<br>$this->medanID::'; print_r($this->medanID);
echo '<br>$this->cariID::'; print_r($this->cariID);
echo '<br>$this->carian::'; print_r($this->carian);
echo '<br>$this->_jadual::'; print_r($this->_jadual);
echo '<br>$this->senarai::'; print_r($this->senarai);
echo '<br>$this->_cariIndustri::'; print_r($this->_cariIndustri);
echo '<br>$this->_method::'; print_r($this->_method);
echo '<br>$template='; print_r($this->template);
echo '</pre>';/*/

# papar hasil carian
$cari1 = '&nbsp;|&nbsp;'; $cari2 = '';
foreach ($this->carian as $kunci => $nilai)
	$cari1 .= ( count($this->carian)==0 ) ? $nilai : $nilai . ' | ';
foreach ($this->senarai as $kunci2 => $nilai2)
	$cari2 .= ( count($nilai2)==0 ) ? $kunci2 . " = Kosong<br>\r"
	: $kunci2 . ' = ' . count($nilai2) . "<br>\r";
//echo "Anda mencari = $cari1\r<br>$cari2\r<hr>";

if(!isset($this->cariID))
	echo '<h1>data kosong daa</h1>';
else # jenis template
	include 'template_' . $this->template . '.php';
//*/