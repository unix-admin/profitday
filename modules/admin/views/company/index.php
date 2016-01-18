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
            [
                'attribute'=>'is_organisator',
                //'label'=>'is_organisator',
                'filter'=>array("0"=>Yii::t('yii','No'),"1"=>Yii::t('yii','Yes')),
                'content'=>function($data){
                    return $data->is_organisator ? Yii::t('yii','Yes'): Yii::t('yii', 'No') ;
                }
            ],
            [
                'attribute'=>'is_sponsor',
                //'label'=>'is_sponsor',
                'filter'=>array("0"=>Yii::t('yii','No'),"1"=>Yii::t('yii','Yes')),
                'content'=>function($data){
                    return $data->is_sponsor ? Yii::t('yii','Yes'): Yii::t('yii', 'No') ;
                },
            ],
            // 'order',
            // 'logo_url:url',
            // 'intro_uk',
            // 'intro_ru',
            // 'intro_en',
            // 'facebook_profile',
            // 'google_profile',
            // 'linkedin_profile',
            // 'vk_profile',
            [
                'attribute'=>'cities',
                //'label'=>'is_sponsor',
                //'filter'=>array("0"=>Yii::t('yii','No'),"1"=>Yii::t('yii','Yes')),
                'content'=>function($data){
                    $tst = $data->registrations($data->id)->all();
                    $data1 = \yii\helpers\ArrayHelper::toArray($tst, [
                        'app\models\City' => [
                            'title_uk',
                        ],
                    ]);
                    $city = '';
                    foreach ($data1 as $value)
                    {
                        $city = $city.' '.$value['title_uk'];
                    }

                    return $city;
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>

</div>
