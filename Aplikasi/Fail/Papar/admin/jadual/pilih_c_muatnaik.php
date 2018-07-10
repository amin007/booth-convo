<?php
$mencari = null;
$butangHantar = 'Search';
?>
<div class="container">
	<div align="center"><form method="GET" action="<?=$mencari?>"
	enctype="multipart/form-data"
	class="form-inline" autocomplete="off">
	<?php //echo $mencari . '<br>' . "\r" ?>
	<div class="form-group row"><div class="input-group">
		<div class="input-group-append"><span class="input-group-text">
			<label for="file">File:</label>
		</span></div><!-- / class="input-group-append" -->
		<input type="file" name="file " class="form-control">
		<div class="input-group-append"><span class="input-group-text">
			<input type="submit" value="<?=$butangHantar?>">
		</span></div><!-- / class="input-group-append" -->
	</div></div>
	</form></div><br>

</div><!-- / class="container" -->
<?php
/*
	<form method="POST" action="import.php" enctype="multipart/form-data">
		<div class="form-group">
			<label for="file">File:</label>
			<input type="file" id="file" name="file">
		</div>
		<button type="submit" name="import" class="btn btn-primary btn-sm">Import</button>
	</form>
*/
?>