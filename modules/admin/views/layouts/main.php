<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Адмінка',
        'brandUrl' => '/admin',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            //'class' => 'navbar-nav navbar-left',
        ],
     ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/admin/default/login']] :
                [
                    'label' => 'Керування користувачами',
                    'url' => ['/admin/admins/index'],
                ],
                [
                'label' => 'Керування контентом',
                'url' => ['/admin/admins/index'],
                ],
                [
                'label' => 'Керування учасниками та компаніями',
                'url' => ['/admin/admins/index'],
                ],
            [
                'label' => 'Керування подіями',
                'url' => ['/admin/admins/index'],
            ],
            [
                'label' => 'Керування розсилками',
                'url' => ['/admin/admins/index'],
            ],
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/admin/default/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
