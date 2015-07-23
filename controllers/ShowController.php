<?php

namespace app\controllers;

class ShowController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
