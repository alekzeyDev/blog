<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Добавить пост';
$this->params['breadcrumbs'][] = ['label' => 'К публикациям', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
