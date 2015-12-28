<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form ActiveForm */
?>
<div class="companyregistration">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'contact_person') ?>
        <?= $form->field($model, 'order') ?>
        <?= $form->field($model, 'intro_uk') ?>
        <?= $form->field($model, 'intro_ru') ?>
        <?= $form->field($model, 'intro_en') ?>
        <?= $form->field($model, 'facebook_profile') ?>
        <?= $form->field($model, 'google_profile') ?>
        <?= $form->field($model, 'linkedin_profile') ?>
        <?= $form->field($model, 'vk_profile') ?>
        <?= $form->field($model, 'need_presentation') ?>
        <?= $form->field($model, 'need_training') ?>
        <?= $form->field($model, 'pay_agree') ?>
        <?= $form->field($model, 'is_organisator') ?>
        <?= $form->field($model, 'is_sponsor') ?>
        <?= $form->field($model, 'ideas') ?>
        <?= $form->field($model, 'telephone') ?>
        <?= $form->field($model, 'e_mail') ?>
        <?= $form->field($model, 'site') ?>
        <?= $form->field($model, 'skype') ?>
        <?= $form->field($model, 'logo_url') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- companyregistration -->
