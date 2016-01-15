<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Person */
/* @var $form ActiveForm */
?>
<div class="site-person">
    <script type="text/javascript">
        $(document).ready(function () {
            $('#company-cities').multiselect({
                placeholder: <?= '\'' . Yii::t('yii', 'Update') . '\'' ?>

            });
        });
    </script>

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
    <?= $form->field($model, 'cities[]')->listBox(ArrayHelper::map(\app\models\City::find()->asArray()->all(), 'id', 'title_' . Yii::$app->language)
        , ['multiple' => 'multiple']); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-person -->
