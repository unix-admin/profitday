<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Person */
/* @var $form ActiveForm */
?>
<div class="personregistration">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'working_place') ?>
        <?= $form->field($model, 'how_know_about') ?>
        <?= $form->field($model, 'facebook_profile') ?>
        <?= $form->field($model, 'google_profile') ?>
        <?= $form->field($model, 'linkedin_profile') ?>
        <?= $form->field($model, 'vk_profile') ?>
        <?= $form->field($model, 'ideas') ?>
        <?= $form->field($model, 'telephone') ?>
        <?= $form->field($model, 'e_mail') ?>
        <?= $form->field($model, 'skype') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- personregistration -->
