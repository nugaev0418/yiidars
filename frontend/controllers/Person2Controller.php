<?php

namespace frontend\controllers;

use frontend\models\Person2;
use Yii;
use yii\db\Query;
use yii\web\Controller;

class Person2Controller extends Controller
{
    public function actionAdd()
    {

        $person = Person2::updateAll(['gender' => 1], ['gender' => 0]);
//        $person->firstname = 'Samariddin';
//        $person->save();
    }

    public function actionUpdate($id)
    {
        $person = Person2::findOne($id);
        if (Yii::$app->request->isPost){
            $person->load(Yii::$app->request->post());
            if ($person->save()){
                $this->redirect('add');
            }
        }

        return $this->render('update', ['model' => $person]);
    }

    public function actionDelete($id){
        $person = Person2::findOne($id);
        $person->delete();
    }
}