<?php

namespace app\controllers;

class MovieController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
