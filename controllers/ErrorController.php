<?php

namespace app\controllers;

class ErrorController extends \yii\web\Controller{
	public $msg;
    public function actionDbUniqueError(){
		$this->msg="Ya existe la regla de acceso";
        return $this->render('db-unique-error',['msg'=>$this->msg,]);
    }

    public function actionDbGrantError(){
		$this->msg="No tiene permisos suficientes. Contactar al DBA, por favor...";
        return $this->render('db-unique-error',['msg'=>$this->msg,]);
    }

    public function actionError(){
		$this->msg="Error generico";
        return $this->render('error',['msg'=>$this->msg,]);
    }

    public function actionLevelAccessError(){
		$this->msg="No tiene acceso a esta seccion";
        return $this->render('level-access-error',['msg'=>$this->msg,]);
    }

}
