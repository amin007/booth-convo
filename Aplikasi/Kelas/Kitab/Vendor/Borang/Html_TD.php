<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Html_TD
{
#==========================================================================================
	function primaryKey($key, $data, $myTable = null, $ca = null, $cb = null)
	{# primary key
		$keyData = $myTable . '/' . $key . '/' . $data;
		$k0 = URL . 'borang/ubah/' . $keyData;
		$k1 = $this->iconFA(1) . '<a target="_blank" href="' . $k0 . '">'
			. $data . '</a>&nbsp;';
		list($pengguna,$level,$birutua,$birumuda,$merah) = $this->setPencam();
		$btn = 'target="_blank" href="' . $k0 . '" class="' . $birumuda . '"';

		if ( in_array($pengguna,array('amin007','azwan')) && $myTable == 'aes'
			&& $ca != null):
			//$b = URL . "operasi/buangID/$ca/$cb/$data";
			$a = '<i class="fa fa-pencil" aria-hidden="true"></i>Ubah1';
			$p = '<a '. $btn . '>' . $a . '</a><br>';
			//. '<a href="' . $b . '" class="btn btn-danger btn-mini">Kosong</a>';
		elseif ($level == 'feprosesan'):
			$a = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ubah2';
			$p = '<a '. $btn . '>' . $a . '</a><br>';
		else:
			$a = '<i class="fa fa-pencil" aria-hidden="true"></i>Ubah1';
			$p = '<a '. $btn . '>' . $a . '</a><br>';
		endif;

		return $p . $data;
	}
#==========================================================================================
	function buangKey($b, $myTable = null)
	{
		$d = explode('|', $b); // pecah data
		$data = $d[2]; $cacb = $d[0] . '/' . $d[1];
		list($pengguna,$level,$birutua,$birumuda,$merah) = $this->setPencam();

		if ( in_array($pengguna,array('amin007','ainzahra')) && $myTable == 'aes'
			&& $cacb != 'X/X'):
			$b = URL . "operasi/buangID/$cacb/$data";
			$p = '<a href="' . $b . '" class="' . $merah
			. '">Kosong</a><br>' . $cacb;
		else:
			$p = null;
		endif;

		return $p;
	}
#==========================================================================================
	function updateKey($key, $data, $myTable = null)
	{
		list($pengguna,$level,$birutua,$birumuda,$merah) = $this->setPencam();

		$b = URL . "borang/ubahID/$myTable/$key/$data";
		$p = '<a href="' . $b . '" class="' . $birutua
		. '">Update</a> | ';

		return $p;
	}
#==========================================================================================
	function deleteKey($key, $data, $myTable = null)
	{
		list($pengguna,$level,$birutua,$birumuda,$merah) = $this->setPencam();

		$b = URL . "borang/buangID/$myTable/$key/$data";
		$p = '<a href="' . $b . '" class="' . $merah
		. '">Delete</a><br>';

		return $p;
	}
#==========================================================================================
	function paparURL($key, $data, $myTable = null, $ca = null, $cb = null)
	{
		if ($key=='entahlah')
		{# primary key
			$k1 = $this->primaryKey($key,$data,$myTable,$ca,$cb);
			?><td><?php echo $k1 ?></td><?php
		}
		elseif(in_array($key,array('Action')))
		{
			$k1 = $this->updateKey($key,$data,$myTable);
			$k2 = $this->deleteKey($key,$data,$myTable);
			?><td><?php echo $k1 . $k2 ?></td><?php
		}
		elseif(in_array($key,array('batchX')))
		{
			$k0 = URL . 'operasi/batch/' . $data;
			$p1 = ($data==null) ? $data :
			'<a target="_blank" href="' . $k0 . '" class="'
			. $this->butang('success') . '">' . $data . '</a>';
			?><td><?php echo $p1 ?></td><?php
		}
		elseif(in_array($key,array('posdaftar')))
		{
			list($k,$btn) = $this->posdaftar($data);
			$pautan = ($data==null) ? $data :
			'<a target="_blank" href="' . $k[3] . '" class="'
			. $this->butang() . '">' . $data . '</a>';

			?><td><?php echo $pautan ?></td><?php
		}
		elseif(in_array($key,array('Mesej')))
		{
			?><td><?php echo nl2br($data) ?></td><?php
		}
		else
		{
			?><td><?php echo $data ?></td><?php
		}//*/
	}
#==========================================================================================
	public function setPencam()
	{
		# set pembolehubah Sesi
		$pengguna = \Aplikasi\Kitab\Sesi::get('namaPendek');
		$level = \Aplikasi\Kitab\Sesi::get('levelPengguna');
		//echo "<br> \$pengguna : $pengguna | \$level = $level";
		list($birutua,$birumuda,$merah) = $this->warnaButang(); # butang

		return array($pengguna,$level,$birutua,$birumuda,$merah);
	}
#==========================================================================================
	public function warnaButang()
	{
		$birutua = 'btn btn-primary btn-mini';
		$birutua2 = 'btn btn-primary';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger'; //btn-outline-secondary
		$merah2 = 'badge badge-pill badge-danger';

		return array($birutua2,$birumuda,$merah);
	}
#==========================================================================================
	public function butang($warna = 'info',$saiz = 'kecil')
	{
		$btnW['primary'] = 'btn btn-primary'; # birutua
		$btnW['info'] = 'btn btn-info'; # birumuda - utama
		$btnW['danger'] = 'btn btn-danger'; # merah
		$btnW['success'] = 'btn btn-success'; #hijau
		$btnS['kecil'] = ' btn-mini'; # - utama
		$btn = $btnW[$warna] . $btnS[$saiz];

		return $btn;
	}
#==========================================================================================
	public function iconFA($pilih)
	{# icon font awesome
		$a[0] = '<i class="fa fa-user-o" aria-hidden="true"></i>';
		$a[1] = '<i class="fa fa-pencil" aria-hidden="true"></i>';

		return $a[$pilih];
	}
#==========================================================================================
	public function pautanTD($target, $href, $class, $data)
	{
		if ($target == null) { $t = ''; }
		else { $t = ' target="' . $target . '"'; }

		?><a<?php echo $t ?> href="<?php echo $href ?>" class="<?php
		echo $class ?>"><?php echo $data ?></a><?php
	}
#==========================================================================================
}