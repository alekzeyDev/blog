<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'К публикациям', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="meta">
        <p> Автор: <?= $model->author_id ?> </p>
        <p> Дата публикации: <?= $model->create_time ?> </p>
        <p> <?php echo!Yii::$app->user->isGuest ? 'ID публикации: ' . $model->id : ''; ?></p>
        <p> <?php echo!Yii::$app->user->isGuest ? 'Статус публикации: ' . $model->status : ''; ?></p>
    </div>

    <div class="content">
        <?php echo $model->content ?>
    </div>

    <p>
        <?php
        echo!Yii::$app->user->isGuest ? Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) : '';
        ?>
        <?php
        echo!Yii::$app->user->isGuest ? Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) : '';
        ?>
    </p>
</div>
