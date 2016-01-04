<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use yii\widgets;

/* @var $this yii\web\View */
/* @var $model app\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form" xmlns:.Url="http://www.w3.org/1999/xhtml">


    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#Ukraine" data-toggle="tab">Ukraine</a></li>
        <li><a href="#Russian" data-toggle="tab">Russian</a></li>
        <li><a href="#English" data-toggle="tab">English</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="Ukraine">
            <?= $form->field($model, 'title_uk')->textInput(['maxlength' => true]) ?>
            <!--add CKEditor package -->
            <?= $form->field($model, 'content_uk')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'full'
            ]) ?>
            <!--end CKEditor package -->
            <?= $form->field($model, 'tags_uk')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane" id="Russian">
            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            <!--add CKEditor package -->
            <?= $form->field($model, 'content_ru')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'full'
            ]) ?>
            <!--end CKEditor package -->
            <?= $form->field($model, 'tags_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane" id="English">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            <!--add CKEditor package -->
            <?= $form->field($model, 'content_en')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'full'
            ]) ?>
            <!--end CKEditor package -->
            <?= $form->field($model, 'tags_en')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <!--<?= $form->field($model, 'content_uk')->textarea(['rows' => 6]) ?>-->
    <!--<?= $form->field($model, 'content_ru')->textarea(['rows' => 6]) ?>-->
    <!--<?= $form->field($model, 'content_en')->textarea(['rows' => 6]) ?>-->


    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    </div>


    <?php ActiveForm::end(); ?>

</div>
