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

        'options' => [
            'class' => 'navbar-inverse navbar-top',
            //'class' => 'navbar-nav navbar-left',
        ],
     ]);
    if (Yii::$app->user->isGuest)
    {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-top'],
            'items' =>[
                ['label' => 'Login', 'url' => ['/admin/default/login']]
            ],
            ]);
    }
    else {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-top'],
            'items' => [
            [
                'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/admin/default/logout'],
                'linkOptions' => ['data-method' => 'post']
            ],

                [
                    'label' => 'Керування користувачами',
                    'url' => ['/admin/admins/index'],
                ],
                [
                    'label' => 'Керування контентом',
                    'url' => ['/admin/content/index'],
                ],
                [
                    'label' => 'Керування учасниками та компаніями',
                    'url' => ['/admin/company/index'],
                ],
            [
                'label' => 'Керування подіями',
                'url' => ['/admin/events/index'],
            ],
            [
                'label' => 'Керування розсилками',
                'url' => ['/admin/mail/index'],
            ],

         ],
    ]);
    }
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
