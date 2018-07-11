<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Tatasusunan
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	//public static function senaraiMedan($pilih)
	public function senaraiMedan($pilih)
	{
		if($pilih == 'login'): //echo "\$pilih = $pilih <br>";
			$medan = array();
		elseif($pilih == 'product'): //echo "\$pilih = $pilih <br>";
			$medan = array();
		elseif($pilih == 'report'): //echo "\$pilih = $pilih <br>";
			$medan = array();
		elseif($pilih == 'website'): //echo "\$pilih = $pilih <br>";
			$medan = array('website_name','website_link','note');
		else: //echo "\$pilih = $pilih <br>";
			$medan = array();
		endif;

		return $medan; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#==========================================================================================
}