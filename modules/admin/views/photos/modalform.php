<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\models\Photos */
/* @var $form yii\widgets\ActiveForm */

Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'size' => 'modal-lg',
    'toggleButton' => ['label' => 'click me'],
    'footer' => Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']),
]);

    ActiveForm::begin();
    ActiveForm::field($model,'id')->textInput();
    field($model, 'photo_path')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder',
        'path' => 'eventphoto',
        'filter'        => 'image',
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-default'],
        'multiple'      => false
    ]);

    ActiveForm::end();

Modal::end();

