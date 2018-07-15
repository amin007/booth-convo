<?php
$url = URL . 'vendor/insertID/' . $this->_pilih;
echo '<h2>' . $url . '</h2>';
$inputName = $this->myTable . '[product]';
$c01 = 'col-sm-2';
$c02 = 'col-sm-7';
$c03 = 'col-sm-9';
?>
<form method="POST" action="<?php echo $url ?>">

<div class="row"><div class="col">

	<div class="form-group row">
		<div class="<?php echo $c03 ?>">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">Product :</span>
				</div>
					<select id="test" name="<?php echo $inputName ?>" class="form-control">
					<option value="" selected="selected">--- select product ---</option>
					<option value="MY">Food & Drink</option>
					<option value="JP">Flower</option>
					<option value="JP">Clothes</option>
					<option value="JP">Cosmetic</option>
					</select>
			</div><!-- /  class="input-group" -->
		</div><!-- / class="<?php echo $c03 ?>" -->
	</div><!-- / class="form-group row" -->

</div><!-- / class="col" --></div><!-- / class="row" -->
<br><br>
<?php
$ulangan = array('ic'=>'SSM','passport'=>'Lesen Berniaga',
'yuran'=>'Yuran Proses',
'sijil'=>'Sijil Pengendalian Makanan',
'suntikan'=>'Suntikan Thypoid');

//input_asal($c01,$c02,$ulangan,$this->myTable);
//input_asal01($c01,$c02,$ulangan,$this->myTable);
input_asal02($c01,$c02,$ulangan,$this->myTable);
//input_baru($c01,$c02,$ulangan,$this->myTable);
?>
<table>
<tr><td align="left">
	<input type="hidden" name="jadual" value="<?php echo $this->myTable ?>">
	<input type="submit" name="Simpan" value="Submit" class="btn btn-primary btn-large">
	<input type="reset" value="Reset" class="btn btn-danger btn-large">
</td></tr>
</table>

</form>
<?php
#---------------------------------------------------------------------------------------------
function pilihInput()
{
?>		Product :
		<span id="spryselect1">
			<select id="test" name="<?php echo $inputName ?>" class="form-control">
			<option value="" selected="selected">--- select product ---</option>
			<option value="MY">Food & Drink</option>
			<option value="JP">Flower</option>
			<option value="JP">Clothes</option>
			<option value="JP">Cosmetic</option>
			</select>
		</span>
<?php
}
#---------------------------------------------------------------------------------------------
function input_asal($c01,$c02,$ulangan)
{
?><div class="row"><div class="col" id="ic" style="display:none;">
		SSM:<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="20"/>
		</span>
</div><!-- / class="col" --></div><!-- / class="row" -->
<div class="row"><div class="col" id="passport" style="display:none;">
		Lesen Berniaga:<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="15"/>
		</span>
</div><!-- / class="col" --></div><!-- / class="row" -->
<div class="row"><div class="col" id="yuran" style="display:none;">
		Yuran Proses:<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="15"/>
		</span>
</div><!-- / class="col" --></div><!-- / class="row" -->
<div class="row"><div class="col" id="sijil" style="display:none;">
		Sijil Pengendalian Makanan:<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="5"/>
		</span>
</div><!-- / class="col" --></div><!-- / class="row" -->
<div class="row"><div class="col" id="suntikan" style="display:none;">
		Suntikan Thypoid:<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="15"/>
		</span>
</div><!-- / class="col" --></div><!-- / class="row" --><?php
}
#---------------------------------------------------------------------------------------------
function input_asal01($c01,$c02,$ulangan)
{
	foreach($ulangan as $label => $input):?>
	<div class="row">
		<div class="col" id="<?php echo $label ?>" style="display:none;">
			<?php echo $input ?>
			<span id="sprytextfield2">
				<input type="text" class="form-control">
			</span>
		</div><!-- / class="col" id="<?php echo $label ?>" style="display:none;" -->
	</div><!-- / class="row" -->
	<?php
	endforeach;
}
#---------------------------------------------------------------------------------------------
function input_asal02($c01,$c02,$ulangan,$myTable)
{
	foreach($ulangan as $label => $input):
	$name = $myTable . '[' . $label . ']'; ?>
	<div class="row" align="center">
	<div class="col" id="<?php echo $label ?>" style="display:none;">
	<div class="form-group row">
		<label for="inputTajuk" style="text-align:left"
		class="<?php echo $c01 ?> control-label"><?php
		echo $input ?></label>
		<div class="<?php echo $c02 ?>">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"
					id="sprytextfield2"><?php
					echo $label ?></span>
				</div>
				<input type="text" name="<?php
				echo $name ?>" class="form-control">
			</div><!-- /  class="input-group" -->
		</div><!-- / class="<?php echo $c02 ?>" -->
	</div><!-- / class="form-group row" -->
	</div><!-- / class="col" id="<?php echo $label ?>" style="display:none;" -->
	</div><!-- / class="row" -->
	<?php
	endforeach;
}
#---------------------------------------------------------------------------------------------
function input_baru($c01,$c02,$ulangan)
{
	foreach($ulangan as $label => $input):?>
	<div class="form-group row">
		<label for="inputTajuk" style="text-align:left"
		class="<?php echo $c01 ?> control-label"><?php
		echo $input ?></label>
		<div class="<?php echo $c02 ?>" id="<?php
		echo $label ?>" style="display:none;">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"
					id="sprytextfield2"><?php
					echo $label ?></span>
				</div>
				<input type="text" class="form-control">
			</div><!-- /  class="input-group" -->
		</div><!-- / class="<?php echo $c02 ?>" -->
	</div><!-- / class="form-group row" -->
	<?php
	endforeach;
}
#---------------------------------------------------------------------------------------------