	<table class="table table-bordered table-striped">
	<?php 
	$printed_headers = false; # mula bina jadual
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{
		if ( !$printed_headers ) # papar tajuk medan sekali sahaja:
		{
			?><thead><tr><?php
			foreach ( array_keys($row[$kira]) as $tajuk ) 
			{
				?><th><?php echo $tajuk ?></th><?php
			}
			?></tr></thead>
	<?php	$printed_headers = true;
		} 
	# papar data $row ------------------------------------------------
	?><tr><?php
		$html = new \Aplikasi\Kitab\Html_TD;
		foreach ( $row[$kira] as $key=>$data )
		{
			$html->paparURL($key, $data, $myTable, 
			$this->c1, $this->c2);
		} 
		?></tr>
	<?php
	}#-----------------------------------------------------------------
	?></table>
