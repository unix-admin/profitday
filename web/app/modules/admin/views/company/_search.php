<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SearchCompany */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'need_presentation') ?>

    <?= $form->field($model, 'need_training') ?>

    <?= $form->field($model, 'pay_agree') ?>

    <?php // echo $form->field($model, 'ideas') ?>

    <?php // echo $form->field($model, 'contact_person') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'e_mail') ?>

    <?php // echo $form->field($model, 'site') ?>

    <?php // echo $form->field($model, 'skype') ?>

    <?php // echo $form->field($model, 'is_organisator') ?>

    <?php // echo $form->field($model, 'is_sponsor') ?>

    <?php // echo $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'logo_url') ?>

    <?php // echo $form->field($model, 'intro_uk') ?>

    <?php // echo $form->field($model, 'intro_ru') ?>

    <?php // echo $form->field($model, 'intro_en') ?>

    <?php // echo $form->field($model, 'facebook_profile') ?>

    <?php // echo $form->field($model, 'google_profile') ?>

    <?php // echo $form->field($model, 'linkedin_profile') ?>

    <?php // echo $form->field($model, 'vk_profile') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
