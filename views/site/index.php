<?php
use yii\widgets\ListView;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Тестовый блог';

echo ListView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'itemView' => function ($model, $key, $index, $widget) {
        return $this->render('\..\post\list-item', [
                'model' => $model,
            ]);
    },
        ]);
?>

