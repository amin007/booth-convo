<?php
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);
 
# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');

include('config.php');
//include("header.php");
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            

                          <form id="borang_pengesahan_pembayaran" name="borang_pengesahan_pembayaran" 
						  method="post" class="borang" style="padding-top:20px">
									<fieldset>
										<table width="750" border="0" align="center" cellpadding="3" 
										cellspacing="1">
											<tr>
												<td colspan="2" align="center"><div class="sub-tajuk-kelabu">
												VIEW QUANTITY PRODUCT</div></td>
											</tr>
									
									<table border="2" cellspacing="2" align="center">
												
									<table border="2" cellspacing="2" align="center">
										
									<center><form action="" method="POST" align="center"><br>
									<span id="sprytextfield2">
					<input type="text" class="input" name="query" placeholder="search" />
													</span>
		<button type="submit" name="cari" class="butangadmin"><span>Search</span></button>
													
		
	</form></center>
		
	</form></center>
	
	<br>
	<table id="example" class="display" border="2" align="center">
		<tr style="font-weight:bold;">
			
			<!--<td align="center">DATE CRITERIA</td></center>
			<td align="center">PRODUCT NO</td></center>-->
			<td align="center">ID VENDOR</td></center>
			<td align="center">SSM</td></center>
			<td align="center"></td></center>
			<td align="center">DATE OF SSM</td></center>
			<td align="center"></td></center>
			<td align="center">NO OF BUSINESS LICENSE</td></center>
			<td align="center"></td></center>
			<td align="center">DATE OF BUSINESS LICENSE</td></center>
			<td align="center"></td></center>
			<td align="center">DATE OF THYPOID INJECTION</td></center>
			<td align="center"></td></center>
			<td align="center">DATE OF FOOD HANDLING CERTIFICATE</td></center>
			<td align="center"></td></center>
			<!--<td align="center">PROCESS FEES</td></center>-->
			<td align="center">ACTION</td></center>
		</tr>
		<?php
		$no = 1;
		
		$query = $_POST['query'];
		if($query !=''){
			$select = mysqli_query($connect, "SELECT * FROM criteria WHERE datecriteria LIKE '".$query."' OR idproduct LIKE '".$query."' OR ssm LIKE '".$query."'");
		}else{
			$select = mysqli_query($connect, "SELECT * FROM criteria where ssm='".$_GET['ssm']."'");
		}
		if(mysqli_num_rows($select)){
		while($row = mysqli_fetch_row($select)){
			
		?>
		
		<tr >
			<!--<td align='center'></td></center>
			<td align='center'></td></center>-->
			<td align='center'><?php echo $row['15'] ?></td></center>
			
			<td align='center'><?php echo $row['3'] ?></td></center>
			<td align="center"><input type="checkbox" name="" value="yes"> Yes<br>
							<input type="checkbox" name="" value="no"> No</center></td>
			<td align='center'><?php echo $row['4'] ?></td></center>
			<td align="center"><input type="checkbox" name="" value="yes"> Yes<br>
							<input type="checkbox" name="" value="no"> No</center></td>
			<td align='center'><?php echo $row['6'] ?></td></center>
			<td align="center"><input type="checkbox" name="" value="yes"> Yes<br>
							<input type="checkbox" name="" value="no"> No</center></td>
			<td align='center'><?php echo $row['7'] ?></td></center>
			<td align="center"><input type="checkbox" name="" value="yes"> Yes<br>
							<input type="checkbox" name="" value="no"> No</center></td>
			<td align='center'><?php echo $row['9'] ?></td></center>
			<td align="center"><input type="checkbox" name="" value="yes"> Yes<br>
							<input type="checkbox" name="" value="no"> No</center></td>
			<td align='center'><?php echo $row['11'] ?></td></center>
			<td align="center"><input type="checkbox" name="" value="yes"> Yes<br>
							<input type="checkbox" name="" value="no"> No</center></td>
			<!--<td align='center'></td></center>-->
			
			<?php
			if($ssm=="yes" && $datessm=="yes" && $lesenberniaga=="yes" && $datelesenberniaga=="yes" 
			&& $suntikan=="yes" && $sijilpmakanan=="yes")
				{
				echo '$status';
				}
			
			?>	
            
			<td><form action="pendingbooking.php" method="post">
                        <input type="hidden" name="accepted" value="$status">
                        <button class="btn success-btn" name='accepted'>Approve</button>
                        </form>
                    </td>
			<?php
			 echo $select  = mysqli_query($connect, 
			 "UPDATE criteria SET status = 'accepted' WHERE ssm = $ssm");
			?>
			
			</td>
</head>
<body>

		</tr>
		<?php }}else{

			echo '<tr><td colspan="9" align="center">No Data</td></tr>';
		}?>
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