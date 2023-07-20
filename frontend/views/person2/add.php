<?php


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;


echo "<h1>Add page</h1>";
$form = ActiveForm::begin();

echo $form->field($model, 'firstname');
echo $form->field($model, 'gender');

echo Html::submitButton('Send', ['class' => 'btn btn-success']);

ActiveForm::end();