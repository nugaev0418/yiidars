<?php

namespace frontend\controllers;


use frontend\models\Post;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use yii\web\Controller;

class PostController extends Controller
{
    public $layout = 'main_old';
    public function actionIndex()
    {
        $count = Yii::$app->db->createCommand('SELECT COUNT(*) FROM post')->queryScalar();

        $provider = new SqlDataProvider([
            'sql' => 'SELECT * FROM post',
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 2,
            ],
            'sort' => [
                'attributes' => [
                    'title',
                    'body',
                ],
            ],
        ]);

        return $this->render('index', [
            'provider' => $provider,
        ]);
    }

    public function actionCreate()
    {
        Yii::$app->session->setFlash('success', 'Alert ishladi!');
        return $this->render('create');
    }

    public function actionList()
    {
        $query = Post::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        return $this->render('list', [
            'provider' => $dataProvider
        ]);
    }

    public function actionView($id)
    {
        $model = Post::findOne($id);

        return $this->render('view', ['model' => $model]);
    }

    public function actionGrid()
    {
        $provider = new ActiveDataProvider([
            'query' => Post::find(),
            'pagination' => [
                'pageSize' => 10
            ]
        ]);

        return $this->render('grid', ['provider' => $provider]);
    }
}