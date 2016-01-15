<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'working_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'how_know_about')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ideas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'google_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk_profile')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
