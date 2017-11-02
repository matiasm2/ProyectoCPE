<?php
namespace app\commands;

use yii\console\Controller;

class Intranet extends Controller{
	public static function getUrlHead(){
		return 'http://'.self::checkPublicIpFrom_http_ip6_me();
	}
	
	public static function checkPublicIpFrom_http_ip6_me(){
		$file = file_get_contents('http://ip6.me/');
		$pos = strpos($file, '+3' ) + 3;
		$ip = substr ( $file, $pos, strlen($file) );
		$pos = strpos ($ip, '</');
		$ip = substr ( $ip, 0, $pos );
		return $ip;
	}
}
?>
