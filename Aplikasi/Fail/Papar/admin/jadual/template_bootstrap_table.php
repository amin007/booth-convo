<!-- h1> Ini Template Bootstrap Table </h1 -->
<?php
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 ) echo '';
	else
	{
		$tajukjadual = 'Jadual : ' . $myTable; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php 
if($this->_pilih != 'report') include 'pilih_a_tajuk.php';
if($this->_pilih == 'login') include 'pilih_c_muatnaik.php';
if($this->_pilih == 'product') include 'pilih_b_carian.php';
if($this->_pilih != 'report') include 'pilih_' . $pilihJadual . '.php';
if($this->_pilih == 'report') include 'z_template-graf.php';
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} // if ( count($row)==0 )
}
?>
