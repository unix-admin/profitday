<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\PhotoWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Events */

$this->title = $model->title_uk;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'label' => 'City',
                'value' => \app\models\City::find(['id'=>$model->city_id])->one()->attributes['title_uk'],
            ],
            'event_date',
            'title_uk',
            'title_ru',
            'title_en',
            'address',

        ],
    ]);
    echo $model->place;
    echo PhotoWidget::widget(['eventId' => $model->id]);
    ?>
</div>
