<center>
<div class="row">
	<div class="col">
		Product :
		<span id="spryselect1">
			<select id="test" name="product" class="input">
			<option value="" selected="selected">--- select product ---</option>
			<option value="MY">Food & Drink</option>
			<option value="JP">Flower</option>
			<option value="JP">Clothes</option>
			<option value="JP">Cosmetic</option>
			</select>
		</span>
	</div><!-- / class="col" -->
</div><!-- / class="row" -->
<div class="row">
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
</div><!-- / class="row" -->

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
<form align="center">
<?php
$class2 = 'col-sm-7'; # untuk $data
// ic,passport,yuran,sijil,suntikan
$ulangan = array('ic'=>'SSM','passport'=>'Lesen Berniaga',
'yuran'=>'Yuran Proses',
'sijil'=>'Sijil Pengendalian Makanan',
'suntikan'=>'Suntikan Thypoid');
foreach($ulangan as $label => $input):
?>
<div class="form-group row" id="<?php
echo $label ?>" style="display:none;">
	<label for="inputTajuk" style="text-align:left"
	class="col-sm-3 control-label"><?php
	echo $input ?></label>
	<div class="<?php echo $class2 ?>" >
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