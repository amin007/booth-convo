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
include 'pilih_a_tajuk.php';
include 'pilih_c_muatnaik.php';
include 'pilih_b_carian.php';
include 'pilih_' . $pilihJadual . '.php'; 
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} // if ( count($row)==0 )
}
?>
