<?php

namespace app\controllers;

class usuarioPrensaController extends \yii\web\Controller
{
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        return $this->render('contact');
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

}
