<?php
namespace app\commands;

use yii\console\Controller;

class Intranet extends Controller{
	public static function getUrlHead(){
		if(isset($_SERVER['HTTP_POST']))
			return "http://".$_SERVER['HTTP_POST'];
		else
			return "http://159.203.122.91";
	}
}
?>
