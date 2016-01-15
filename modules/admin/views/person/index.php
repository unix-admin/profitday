<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'working_place',
            'how_know_about',
            'ideas:ntext',
            // 'telephone',
            // 'e_mail',
            // 'skype',
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
