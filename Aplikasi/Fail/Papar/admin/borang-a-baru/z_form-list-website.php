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
include 'z_template-3ruang.php';
echo "\n\n";
?>

<div class="row">
<div class="col-md-12">
<div class="card"><?php
include 'jadual/template_' . $this->template . '.php';
echo "\n\n";
?>
</div><!-- / class="card" -->
<div class="card">
	<form class="form-horizontal" method="POST" action="<?php
	echo URL ?>homeadmin/addform/<?php echo $this->myTable ?>">
 <?php
	//echo 'namatable:' . $this->myTable;
	//echo '<pre>namamedan:'; print_r($this->medan);
	//echo '</pre>';
	foreach ($this->medan as $kunci =>$nilai)
	{?>
	<div class="control-group">
		<label class="control-label"><?php echo $nilai ?></label>
		<div class="controls">
		<input type="text" name="<?php echo $this->myTable
		. '[0][' . $nilai . ']' ?>" class="input-big span11">
		</div>
	</div>
<?php
	}?>
<!-- butang action --><br><br>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Save</button>
		<!-- button type="submit" class="btn btn-primary">Reset</button>
		<button type="submit" class="btn btn-info">Edit</button>
		<button type="submit" class="btn btn-danger">Cancel</button -->
	</div>
	</form>
</div><!-- / class="card" -->
</div><!-- / class="col-md-12" -->
</div><!-- / class="row" -->
</div><!-- / class="container-fluid" -->
<!-- tamat template
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
</div><!-- / class="content" --
<?php
include 'atasbawah1/dibawah.php';
?>