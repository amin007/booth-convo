<table width="750" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
	<td colspan="2" align="center"><div class="sub-tajuk-kelabu">UPDATE PRODUCT</div></td>
</tr>
</table>

<table border="2" cellspacing="2" align="center">
<form action="" method="POST" align="center"><br>
<input type="text" name="query" placeholder="search" />
<input type="submit" name="cari" value="Search" />
</form><br>
</table>

<div class="col-sm-9">
<table class="table table-bordered table-striped">
<thead>
	<th>Id Admin</th>
	<th>Product No</th>
	<th>Category Product</th>
	<th>Capacity</th>
	<th>Action</th>
</thead>
<tbody>
<tr>
	<td>A002</td>
	<td>B003</td>
	<td>flower</td>
	<td>200</td>
	<td align="center"><button><a href="updateproduct.php? id=A002">UPDATE</a></button> / <button>
	<a class="button" onclick="return confirm_alert(this);" a href="deleteproduct.php? id=A002">DELETE</a></button></td>    
</tr>
</table>
</div>