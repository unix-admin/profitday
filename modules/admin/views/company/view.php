<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Company */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('yii','Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('yii','Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
              'label' => 'need_presentation',
              'format' => 'html',
              'value' => $model->need_presentation ? Yii::t('yii','Yes') : Yii::t('yii','No'),
            ],
            [
                'label' => 'need_training',
                'format' => 'html',
                'value' => $model->need_training ? Yii::t('yii','Yes') : Yii::t('yii','No'),
            ],
            [
                'label' => 'pay_agree',
                'format' => 'html',
                'value' => $model->pay_agree ? Yii::t('yii','Yes') : Yii::t('yii','No'),
            ],
            'ideas:ntext',
            'contact_person',
            'telephone',
            'e_mail',
            'site',
            'skype',
            [
                'label' => Yii::t('company','Is Organisator'),
                'format' => 'html',
                'value' => $model->is_organisator ? Yii::t('yii','Yes') : Yii::t('yii','No'),
            ],
            [
                'label' => Yii::t('company','Is Sponsor'),
                'format' => 'html',
                'value' => $model->is_sponsor ? Yii::t('yii','Yes') : Yii::t('yii','No'),
            ],
            'order',
            'logo_url:url',
            'intro_uk',
            'intro_ru',
            'intro_en',
            'facebook_profile',
            'google_profile',
            'linkedin_profile',
            'vk_profile',
        ],
    ]) ?>

</div>
