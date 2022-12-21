<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function selected_helper($str, $select)
	{
		if ($str == $select) 
		{
			return 'selected';
		}
	}

function get_ext($data)
{
	$array = explode(".",$data);

	$lastKey = key(array_slice($array, -1, 1, true));
	return $array[$lastKey];
}

function tgl_ina($parameter, $bul=FALSE)
	{  //ini  untuk  mengubah  format  2015-06-15  ke  dalam format  15  Juni 2015
		$thn=substr($parameter,0,4);  //menngambil  4  digit  dari  kiri,  0  adalah  index  pertama  dari  tahun (angka 2 dari 2015), 4 banyaknya digit yg diambil
		$b=substr($parameter,5,2); //mengambil 2 digit, index 5 adalah angka 0 dari 06
		$tgl=substr($parameter,8,2); //mengambil 2 digit dari kanan
		if($b==1) {$bln="Januari";}
		else if($b==2) {$bln="Februari";}
		else if($b==3) {$bln="Maret";}
		else if($b==4) {$bln="April";}
		else if($b==5) {$bln="Mei";}
		else if($b==6) {$bln="Juni";}
		else if($b==7) {$bln="Juli";}
		else if($b==8) {$bln="Agustus";}
		else if($b==9) {$bln="September";}
		else if($b==10){$bln="Oktober";}
		else if($b==11){$bln="November";}
		else if($b==12){$bln="Desember";}
		$tanggal=$tgl . " ".$bln ." ".$thn;

		if ($bul == TRUE) 
		{
			return $bln;
		}
		else
		{
			return $tanggal;
		}
	}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function array_sort_by_column(&$arr, $col, $dir = SORT_ASC) {
    $sort_col = array();
    foreach ($arr as $key => $row) {
        $sort_col[$key] = $row[$col];
    }

    array_multisort($sort_col, $dir, $arr);
}

function rupiah($angka)
	{
		$hasil_rupiah = number_format($angka,0,',','.');
		return $hasil_rupiah;
	}

function text_panjang($in, $length = 100)
{
	return strlen($in) > $length ? substr($in,0,$length)."..." : $in;
}