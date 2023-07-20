<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>

<?php

echo Html::tag('h1', Html::encode('Nugaev'), ['class' => 'name-username', 'id' => 'test']);
$options = ['class' => ['btn', 'btn-success']];

echo Html::tag('div', 'Save', $options);

echo Html::beginForm(['order/update', 'id' => 15], 'post', ['enctype' => 'multipart/form-data']);
echo Html::submitButton('Submit', ['class' => ['submit', 'btn', 'btn-primary']]);
echo Html::input('text', 'username', '', ['class' => 'form-control', 'placeholder' => 'Username']);
echo Html::endForm();


?>
