<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form ActiveForm */
?>
<div class="City">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title_uk') ?>
        <?= $form->field($model, 'title_ru') ?>
        <?= $form->field($model, 'title_en') ?>
        <?= $form->field($model, 'have_event') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- City -->
