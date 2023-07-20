<?php

use yii\helpers\Html;

echo \yii\grid\GridView::widget([
    'dataProvider' => $provider,
//    'tableOptions' => ['class' => 'table table-striped table-dark'],
    'layout'=>"{pager}\n{summary}\n{items}\n{pager}",
    'showHeader' => true,
    'showFooter'=>true,
    'summary' => 'Showing <b class="text-success">{begin}-{end}</b> of <b>{totalCount}</b> Items',
    'columns' => [
        ['class' => \yii\grid\CheckboxColumn::className()],
        'id',
        [
            'label' => 'ID',
            'attribute'=> 'id',
            'value' => function($data){
                return $data->category->name . 10;
            }
        ],
        'title',
        'body:html',
        [
            'label' => 'Kategoriya',
            'attribute' => 'category_id',
            'value' => 'category.name',
            'footer' => 123
        ],
        [
            'attribute' => 'created_at',
            'format' => ['date', 'php:d.m.Y H:i:s'],
        ],
        [
            'label' => 'Image',
            'format' => 'raw',
            'value' => function($data){
                return Html::img(Yii::getAlias('@web').'/img/yii-logo.png',[
                    'alt'=>'yii2 - image in gridview',
                    'style' => 'width:50px;',
                    'class' => 'img-thumbnail'
                ]);
            },
        ],
        [
            'label' => 'Ссылка',
            'format' => 'raw',
            'value' => function($data){
                return Html::a(
                    'Go',
                    ['view', ['id' => $data->id]],
                    [
                        'title' => 'Go Go Go!',
                        'target' => '_blank'
                    ],
                );
            },
            'options' => ['width' => '50']
        ],

        [
            'class' => 'yii\grid\ActionColumn',
            'template' => ' {update} {delete} {view} {link}',
            'buttons' => [
                'update' => function ($url, $model) {
                    return Html::a(
                        '<i class="bi bi-arrow-counterclockwise"></i>',
                        $url);
                },
                'link' => function ($url, $model, $key) {
                    return Html::a('Action', $url);
                },
            ],
        ],
        [
            'label' => 123,
            'format' => 'raw',
            'value' => function(){
                return '<button type="button" class="btn btn-primary">Primary</button>';
            }
        ]
    ]
]);