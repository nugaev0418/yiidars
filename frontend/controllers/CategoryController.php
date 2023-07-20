<?php

namespace frontend\controllers;

use frontend\models\Category;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {

    }

    public function actionView($id)
    {
        $category = Category::findOne($id);

        return $this->render('view', ['category' => $category]);
    }
}