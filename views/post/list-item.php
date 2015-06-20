<?php
use yii\helpers\Html;
/* @var $model common\models\Post */
/* @var TagPost $postTag */
?>

<h1><?= $model->title ?></h1>

<div class="meta">
    <p>Автор: <?= $model->author_id ?> Дата публикации: <?= $model->create_time ?></p>
</div>

<div class="content">
    <?php //echo $model->anons ?>
</div>

<?= Html::a('Читать далее', ['post/view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

