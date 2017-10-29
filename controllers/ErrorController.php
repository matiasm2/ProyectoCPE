<?php

namespace app\controllers;

class ErrorController extends \yii\web\Controller
{
    public function actionError()
    {
        return $this->render('error');
    }

}
