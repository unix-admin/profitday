<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SearchCompany */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
           // 'need_presentation',
           // 'need_training',
           // 'pay_agree',
            // 'ideas:ntext',
            // 'contact_person',
             'telephone',
             'e_mail',
            // 'site',
            // 'skype',
             'is_organisator',
             'is_sponsor',
            // 'order',
            // 'logo_url:url',
            // 'intro_uk',
            // 'intro_ru',
            // 'intro_en',
            // 'facebook_profile',
            // 'google_profile',
            // 'linkedin_profile',
            // 'vk_profile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
