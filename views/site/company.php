<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form ActiveForm */
?>
<div class="site-company">
<<<<<<< Updated upstream
=======
    <script type="text/javascript">
        $(document).ready(function () {
            $('#company-cities').multiselect({
                placeholder: <?= '\'' . Yii::t('yii', 'Update') . '\'' ?>
>>>>>>> Stashed changes

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< Updated upstream
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
=======
    <?= $form->field($model, 'facebook_profile') ?>
    <?= $form->field($model, 'google_profile') ?>
    <?= $form->field($model, 'linkedin_profile') ?>
    <?= $form->field($model, 'vk_profile') ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'contact_person') ?>
    <?= $form->field($model, 'order')->dropDownList(['1' => 'Yes', '0' => 'No']) ?>
    <?= $form->field($model, 'intro_uk') ?>
    <?= $form->field($model, 'intro_ru') ?>
    <?= $form->field($model, 'intro_en') ?>
    <?= $form->field($model, 'need_presentation')->dropDownList(['1' => 'Yes', '0' => 'No']) ?>
    <?= $form->field($model, 'need_training')->dropDownList(['1' => 'Yes', '0' => 'No']) ?>
    <?= $form->field($model, 'pay_agree')->dropDownList(['1' => 'Yes', '0' => 'No']) ?>
    <?= $form->field($model, 'is_organisator') ?>
    <?= $form->field($model, 'is_sponsor') ?>
    <?= $form->field($model, 'ideas') ?>
    <?= $form->field($model, 'telephone') ?>
    <?= $form->field($model, 'e_mail') ?>
    <?= $form->field($model, 'site') ?>
    <?= $form->field($model, 'skype') ?>
    <?= $form->field($model, 'logo_url') ?>
    <?= $form->field($model, 'cities[]')->listBox(ArrayHelper::map(\app\models\City::find()->asArray()->all(), 'id', 'title_' . Yii::$app->language)
        , ['multiple' => 'multiple']); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>
>>>>>>> Stashed changes
    <?php ActiveForm::end(); ?>

</div><!-- site-company -->
