<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="<?=JQUERY?>"></script>
<script type="text/javascript" src="<?=BOOTSTRAPJS?>"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<?php
if (isset($this->js))
{
    foreach ($this->js as $js)
    {
        echo "\n";
		/*?><script type="text/javascript" src="<?php echo SUMBER . $js ?>"></script><?php*/
		?><script type="text/javascript" src="<?php echo $js ?>"></script><?php
    }
}
?><?php
$dataURL = dpt_url();
//echo '<pre>'; echo '<br>$dataURL:<br>'; print_r($dataURL); echo '</pre>';
$classKhas = array('ubah2','hadirbulan','awal','batch','senarai');
if ( isset($dataURL[1]) && ( in_array($dataURL[1],$classKhas) )) :
echo "\n\n"; ?>
<script type="text/javascript">
function lookup(inputString)
{
	if(inputString.length == 1)
	{
		$('#suggestions').hide();// Hide the suggestion box.
	}
	else
	{
		$.get("<?php echo URL ?>cari/syarikat/", {cari: inputString}, function(data)
		{
			if(data.length >0)
			{
				$('#suggestions').show();
				$('#autoSuggestionsList').html(data);
			}
		});
	}
} // lookup

function fill(thisValue)
{
	$('#inputString').val(thisValue);
	setTimeout("$('#suggestions').hide();", 200);
}

// kod jquery global
$(document).ready(function(){
	/* ---------- Text editor ---------- */
	$('.cleditor').cleditor();
	/* ---------- Datapicker ---------- */
	$('.date-picker').datepicker();
	/* ---------- Choosen ---------- */
	$('[data-rel="chosen"],[rel="chosen"]').chosen();
	/* ---------- Placeholder Fix for IE ---------- */
	$('input, textarea').placeholder();
	/* ---------- Auto Height texarea ---------- */
	$('textarea').autosize();
	/* ---------- Masked Input ---------- */
	$("#date").mask("99/99/9999");
	$("#phone").mask("(999) 999-9999");
	$("#tin").mask("99-9999999");
	$("#ssn").mask("999-99-9999");
	$.mask.definitions['~']='[+-]';
	$("#eyescript").mask("~9.99 ~9.99 999");
	/* ---------- Textarea with limits ---------- */
	$('#limit').inputlimiter({
		limit: 10,
		limitBy: 'words',
		remText: 'You only have %n word%s remaining...',
		limitText: 'Field limited to %n word%s.'
	});
	/* ---------- Timepicker for Bootstrap ---------- */
	$('#timepicker1').timepicker();
	/* ---------- DateRangepicker for Bootstrap ---------- */
	$('#daterange').daterangepicker();
	/* ---------- Bootstrap Wysiwig ---------- */
	$('.editor').wysiwyg();
	/* ---------- Colorpicker for Bootstrap ---------- */
	$('#colorpicker1').colorpicker();
});
</script>
<style type="text/css">
.suggestionsBox {
	position: relative;
	left: 30px;
	margin: 10px 0px 0px 0px;
	width: 600px;
	background-color: #212427;
	-moz-border-radius: 7px;
	-webkit-border-radius: 7px;
	border: 2px solid #000000;
	color: #ffff00;
}
.suggestionList {margin: 0px;padding: 0px;}
.suggestionList li {
	margin: 0px 0px 3px 0px;
	padding: 3px;
	cursor: pointer;
}
.suggestionList li:hover {background-color: #659CD8;}
</style>
<?php
elseif( isset($this->_pilih) && ($this->_pilih == 'booking') ): echo "\n\n"; ?>
<script type="text/javascript">
$('#test').on('change', function() {
// alert( this.value ); // or $(this).val()
	/*if(this.value == "MY")*/
	if(this.value == "Food & Drink")
	{
		$('#ic').show();
		$('#passport').show();
		$('#yuran').show();
		$('#sijil').show();
		$('#suntikan').show();
	}
	else
	{
		$('#ic').show();
		$('#passport').show();
		$('#yuran').show();
		$('#sijil').hide();
		$('#suntikan').hide();
	}
});
</script>
<?php
else :
endif;