<center>
<div class="row">
	<div class="col">
		Product :
		<span id="spryselect1">
			<select id="test" name="product" class="form-control">
			<option value="" selected="selected">--- select product ---</option>
			<option value="MY">Food & Drink</option>
			<option value="JP">Flower</option>
			<option value="JP">Clothes</option>
			<option value="JP">Cosmetic</option>
			</select>
		</span>
	</div><!-- / class="col" -->
</div><!-- / class="row" -->
<br><br>
<?php
$c01 = 'col-sm-2';
$c02 = 'col-sm-7';
$ulangan = array('ic'=>'SSM','passport'=>'Lesen Berniaga',
'yuran'=>'Yuran Proses',
'sijil'=>'Sijil Pengendalian Makanan',
'suntikan'=>'Suntikan Thypoid');

//input_asal($c01,$c02,$ulangan);
//input_asal01($c01,$c02,$ulangan);
input_asal02($c01,$c02,$ulangan);
//input_baru($c01,$c02,$ulangan);
?>

</center>

<table>
<tr>
<td align="right">&nbsp;</td>
<td align="left"><br><br>
	<button type="submit" name="login" class="butangadmin"><span>SUBMIT</span></button>
	<button type="reset" class="butangadmin"><span>CLEAR</span></button>
</td>
</tr>
</table>

<br><br><hr>
<?php
#---------------------------------------------------------------------------------------------
function input_asal($c01,$c02,$ulangan)
{
?><div class="row">
	<div class="col" id="ic" style="display:none;">
		SSM:
		<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="20"/>
		</span>
	</div><!-- / class="col" -->
</div><!-- / class="row" -->
<div class="row">
	<div class="col" id="passport" style="display:none;">
		Lesen Berniaga:
		<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="15"/>
		</span>
	</div><!-- / class="col" id="passport" style="display:none;" -->
</div><!-- / class="row" -->
<div class="row">
	<div class="col" id="yuran" style="display:none;">
		Yuran Proses:
		<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="15"/>
		</span>
	</div><!-- / class="col" id="yuran" style="display:none;" -->
</div><!-- / class="row" -->
<div class="row">
	<div class="col" id="sijil" style="display:none;">
		Sijil Pengendalian Makanan:
		<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="5"/>
		</span>
	</div><!-- / class="col" id="sijil" style="display:none;" -->
</div><!-- / class="row" -->
<div class="row">
	<div class="col" id="suntikan" style="display:none;">
		Suntikan Thypoid:
		<span id="sprytextfield2">
			<input name="ssm" type="text" class="input" id="ssm" value="" size="15"/>
		</span>
	</div><!-- / class="col"id="suntikan" style="display:none;" -->
</div><!-- / class="row" --><?php
}
#---------------------------------------------------------------------------------------------
function input_asal01($c01,$c02,$ulangan)
{
	$ulangan = array('ic'=>'SSM','passport'=>'Lesen Berniaga',
	'yuran'=>'Yuran Proses',
	'sijil'=>'Sijil Pengendalian Makanan',
	'suntikan'=>'Suntikan Thypoid');

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
function input_asal02($c01,$c02,$ulangan)
{
	$ulangan = array('ic'=>'SSM','passport'=>'Lesen Berniaga',
	'yuran'=>'Yuran Proses',
	'sijil'=>'Sijil Pengendalian Makanan',
	'suntikan'=>'Suntikan Thypoid');

	foreach($ulangan as $label => $input):?>
	<div class="row" align="center">
	<div class="col" id="<?php echo $label ?>" style="display:none;">
	<div class="form-group row">
		<label for="inputTajuk" style="text-align:left"
		class="col-sm-2 control-label"><?php
		echo $input ?></label>
		<div class="col-sm-7">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"
					id="sprytextfield2"><?php
					echo $input ?></span>
				</div>
				<input type="text" class="form-control">
			</div><!-- /  class="input-group" -->
		</div><!-- / class="col-sm-7" -->
	</div><!-- / class="form-group row" -->
	</div><!-- / class="col" id="<?php echo $label ?>" style="display:none;" -->
	</div><!-- / class="row" -->
	<?php
	endforeach;
}
#---------------------------------------------------------------------------------------------
function input_baru($c01,$c02,$ulangan)
{?>
	<form align="center">
	<?php
	foreach($ulangan as $label => $input):
	?>
	<div class="form-group row">
		<label for="inputTajuk" style="text-align:left"
		class="col-sm-3 control-label"><?php
		echo $input ?></label>
		<div class="<?php echo $class2 ?>" id="<?php
		echo $label ?>" style="display:none;">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"
					id="sprytextfield2"><?php
					echo $label ?></span>
				</div>
				<input type="text" class="form-control">
			</div><!-- /  class="input-group" -->
		</div><!-- / class="<?php echo $class2 ?>" -->
	</div><!-- / class="form-group row" -->
	<?php
	endforeach;
	?>
	</form>
<?php
}
#---------------------------------------------------------------------------------------------