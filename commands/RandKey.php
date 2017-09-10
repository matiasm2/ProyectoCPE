<?php
namespace app\commands;

use yii\console\Controller;

class RandKey extends Controller{
	public static function randKey($str='',$long=0){
		$key = null;
		$str = str_split($str);
		$start = 0;
		$limit = count($str) -1;
		for($x=0; $x < $long ;$x++){
			$key .= $str[rand($start,$limit)];
			}
		return $key;
	}
}
?>
