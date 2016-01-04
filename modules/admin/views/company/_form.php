<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'need_presentation')->textInput()->dropDownList(['0'=>Yii::t('app','No'),'1'=>Yii::t('app','Yes') ]) ?>

    <?= $form->field($model, 'need_training')->textInput() ?>

    <?= $form->field($model, 'pay_agree')->textInput() ?>

    <?= $form->field($model, 'ideas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_organisator')->textInput() ?>

    <?= $form->field($model, 'is_sponsor')->textInput() ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'logo_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro_uk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intro_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'google_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk_profile')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('yii','Create') : Yii::t('yii','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
