<?php
namespace app\commands;

use yii\console\Controller;
use yii\helpers\Url;
use yii\helpers\Html;

class Mailto extends Controller{
	public static function getUrlMailto($dest,$subject,$cc,$bcc,$body,$link,$namelink){
		$subject = urlencode($subject);
		$link = urlencode($link);
		$msj = urlencode($body);
		$str="<li><a href='mailto:";
		$str .= $dest;
		$str .= "?subject=".$subject;
		$str .= "?cc=".$cc;
		$str .= "?bcc=".$bcc;
		$str .= "?body=".$msj;
		$str .= " ".$link.".";
		$str .= "'>".$namelink."</a></li>";
		return $str;
	}
}
?>
