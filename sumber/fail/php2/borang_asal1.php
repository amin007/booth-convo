<?php
include('config.php');
//include("header.php");
?>

<div class="content">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	
	<fieldset>
	<table width="750" border="0" align="center" cellpadding="3" cellspacing="1">
	<tr><td colspan="2" align="center"><div class="sub-tajuk-kelabu">
		VIEW QUANTITY PRODUCT</div></td></tr>
	</table>
	<center>
		<form action="" method="POST" align="center"><br>
			<span id="sprytextfield2">
				<input type="text" class="input" name="query" placeholder="search" />
			</span>
			<button type="submit" name="cari" class="butangadmin"><span>Search</span></button>
		</form>
	</center>
		
	<br>

	<table id="example" class="display" border="2" align="center">
	<tr style="font-weight:bold;">
	<!--<td align="center">DATE CRITERIA</td></center>
	<td align="center">PRODUCT NO</td></center>-->
	<td align="center">ID VENDOR</td>
	<td align="center">SSM</td>
	<td align="center"></td>
	<td align="center">DATE OF SSM</td>
	<td align="center"></td>
	<td align="center">NO OF BUSINESS LICENSE</td>
	<td align="center"></td>
	<td align="center">DATE OF BUSINESS LICENSE</td>
	<td align="center"></td>
	<td align="center">DATE OF THYPOID INJECTION</td>
	<td align="center"></td>
	<td align="center">DATE OF FOOD HANDLING CERTIFICATE</td>
	<td align="center"></td>
	<!--<td align="center">PROCESS FEES</td>-->
	<td align="center">ACTION</td>
	</tr>
<?php
$no = 1;
$query = $_POST['query'];
if($query != '')
{
	$select = mysqli_query($connect, "SELECT * FROM criteria WHERE datecriteria LIKE '".$query
	."' OR idproduct LIKE '".$query."' OR ssm LIKE '".$query."'");
}
else
{# paparkan semua data dalam mysql dulu
	//$select = mysqli_query($connect, "SELECT * FROM criteria where ssm='".$_GET['ssm']."'");
	$select = mysqli_query($connect, "SELECT * FROM criteria");
}

if(mysqli_num_rows($select))
{
	while($row = mysqli_fetch_row($select))
	{
		include 'papar_jadual.php';
	}
}
else
{
	echo '<tr><td colspan="14" align="center">No Data</td></tr>';
}
/*$row = array(15 => '456',3 => '456',4 => '456',6 => '456',7 => '456',9 => '456',11 => '456');
$ssm = $datessm = $lesenberniaga = $datelesenberniaga = $suntikan = $sijilpmakanan = 'yes';
//*/
include 'papar_jadual.php';
?>
</table>
<br>
</div>
</div>
</div>
</div>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper.js/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./vendor/chart.js/chart.min.js"></script>
<script src="./js/carbon.js"></script>
<script src="./js/demo.js"></script>
</body>
</html>