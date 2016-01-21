<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title_uk',
            //'title_ru',
            // 'title_en',
            // 'content_uk:ntext',
            // 'content_ru:ntext',
            // 'content_en:ntext',
            // 'tags_uk',
            // 'tags_ru',
            //  'tags_en',
            //'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
