<?php

namespace frontend\controllers;

use frontend\models\Order;
use Yii;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $formatter = \Yii::$app->formatter;
echo $formatter->asDate(date('Y-m-d'), 'short'),"<br>";

        echo Yii::$app->formatter->asCurrency(100),"<br>";

    }
}