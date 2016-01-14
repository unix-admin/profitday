<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Photos */

$this->title = Yii::t('app', 'Create Photos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Photos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
