<?php

namespace app\controllers;

class ErrorController extends \yii\web\Controller
{
	public $msg;
	
    public function actionError()
    {
		//$this->msg="Datos del error.";
        return $this->render('error',["msg" => $this->msg]);
    }
    
    
    public function setMsg($ref){
        return $this->render('error',["msg" => $ref]);
	}
}
