<?php
echo \yii\widgets\DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        [
            'label' => 'Identification number',
            'attribute' => 'id'
        ],
        'title',
        'body:html',
        [                                                  // name свойство зависимой модели owner
            'label' => 'Category',
            'value' => $model->category->name,
            'contentOptions' => ['class' => 'bg-red'],     // настройка HTML атрибутов для тега, соответсвующего value
            'captionOptions' => ['tooltip' => 'Tooltip'],  // настройка HTML атрибутов для тега, соответсвующего label
        ],
        'created_at:datetime',
        'updated_at',
        [
            'label' => 'Update at',
            'format' => 'raw',
            'value' => function($model){
                return !is_null($model->updated_at) ? '<span class="text-success">'.$model->updated_at.'</span>' : '<span class="text-danger">Kiritilmagan</span>';
            }
        ]
    ]
]);
