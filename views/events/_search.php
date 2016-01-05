<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EventsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'event_date') ?>

    <?= $form->field($model, 'title_uk') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?php // echo $form->field($model, 'title_en') ?>

    <?php // echo $form->field($model, 'address') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
