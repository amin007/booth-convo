<?php
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 ) echo '';
	else
	{
		$tajukjadual = '<span class="badge badge-success">' . $myTable . '</span>'
		. "\r" . '<span class="badge">' . count($row) . '</span>';
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php include 'borang02_ubah.php'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} // if ( count($row)==0 )
}
?>
