<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Sql_Create
{
#=================================================================================================
#-------------------------------------------------------------------------------------------------
	function __construct() { }
#-------------------------------------------------------------------------------------------------
	public function semakData($data)
	{
		echo '<pre>Test $data->:<br>';	print_r($data); echo '</pre>|';
	}
#-------------------------------------------------------------------------------------------------
	public function arahanSet($myTable, $data)
	{
		$senarai = null; //echo '<pre>$data->'; print_r($data); echo '</pre>';
		foreach ($data as $medan => $nilai)
		{
			$senarai[] = ($nilai==null) ? " `$medan`=null" : " `$medan`='$nilai'";
		}

		# set sql
		$sql  = "INSERT INTO $myTable SET \r";
		$sql .= implode(",\r", $senarai);

		return $sql;
	}
#-------------------------------------------------------------------------------------------------
	public function arahanValues($myTable, $medan, $data)
	{
		//echo '<pre>$data->'; print_r($data); echo '</pre>';

		# set sql
		$sql  = "INSERT INTO $myTable\r($medan) VALUES \r";
		$sql .= implode(",\r", $data) . ";";

		return $sql;
	}
#-------------------------------------------------------------------------------------------------
	public function buatBaru($myTable, $medan)
	{
		$medan = $this->pecahMedan($medan);
		$this->semakData($medan);
		$sql = 'CREATE TABLE `' . $myTable . "` \r(\r"
			 . $this->ulangmedan($medan) . "\r)"
			 . ';';

		return $sql;
	}
#-------------------------------------------------------------------------------------------------
	function pecahMedan($medan)
	{
		//$medan = substr($medan, 1, -1);  // returns "bcde"
		//echo '<br>1.$medan = ' . $medan;
		//$medan = substr($medan, 0, -1);  // returns "abcde"
		//echo '<br>2.$medan = ' . $medan;
		$medan01 = explode(',', $medan);
		//$this->semakData($medan01);
		return $medan01;
	}
#-------------------------------------------------------------------------------------------------
	function ulangmedan($data)
	{
		$senarai = null; //$this->semakData($data);
		foreach ($data as $key => $nilai)
		{
			$senarai[] = "\t $nilai varchar(255)";
		}

		$medan = implode(",\r", $senarai);

		return $medan;
	}
#-------------------------------------------------------------------------------------------------
/*
		$sql = 'CREATE TABLE `' . $myTable . '` '
			 . "\r(\r" . $medan . " varchar(255)\r)"
			 . ';';

*/
#-------------------------------------------------------------------------------------------------
#=================================================================================================
}