<?php

namespace app\controllers;

class CPEAdminController extends \yii\web\Controller
{
    public function actionAbmUsuarios()
    {
        return $this->render('abm-usuarios');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionError()
    {
        return $this->render('error');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionListaDeEnvios()
    {
        return $this->render('lista-de-envios');
    }

    public function actionListaDeUsuarios()
    {
        return $this->render('lista-de-usuarios');
    }

}
