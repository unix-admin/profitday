<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\City::find()->all(),'id','title_uk')) ?>

    <?= $form->field($model, 'event_date')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'uk',
     //   'dateFormat' => 'dd-MM-yyyy',

    ]) ?>

    <?= $form->field($model, 'title_uk')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
