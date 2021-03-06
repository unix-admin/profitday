<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form ActiveForm */
?>
<div class="site-company">
    <script type="text/javascript">
        $(document).ready(function() {
            $('#company-cities').multiselect({
                placeholder: <?= '\''.Yii::t('yii','Update').'\'' ?>

            });
        });
    </script>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'facebook_profile') ?>
        <?= $form->field($model, 'google_profile') ?>
        <?= $form->field($model, 'linkedin_profile') ?>
        <?= $form->field($model, 'vk_profile') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'contact_person') ?>
        <?= $form->field($model, 'order')->dropDownList(['1'=>'Yes','0'=>'No']) ?>
        <?= $form->field($model, 'intro_uk') ?>
        <?= $form->field($model, 'intro_ru') ?>
        <?= $form->field($model, 'intro_en') ?>
        <?= $form->field($model, 'need_presentation')->dropDownList(['1'=>'Yes','0'=>'No']) ?>
        <?= $form->field($model, 'need_training')->dropDownList(['1'=>'Yes','0'=>'No']) ?>
        <?= $form->field($model, 'pay_agree')->dropDownList(['1'=>'Yes','0'=>'No']) ?>
        <?= $form->field($model, 'is_organisator') ?>
        <?= $form->field($model, 'is_sponsor') ?>
        <?= $form->field($model, 'ideas') ?>
        <?= $form->field($model, 'telephone') ?>
        <?= $form->field($model, 'e_mail') ?>
        <?= $form->field($model, 'site') ?>
        <?= $form->field($model, 'skype') ?>
        <?= $form->field($model, 'logo_url') ?>
        <?= $form->field($model, 'cities[]')->listBox(ArrayHelper::map(\app\models\City::find()->asArray()->all(),'id','title_'.Yii::$app->language)
        ,['multiple' => 'multiple']); ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-company -->
