<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\LanguageSwitcherWidget;


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

<header style="margin-top: 2%;">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-12 col-sm-12 col-xs-12">-->
            <div class="col-md-4">
                <a class="dropdown-top" href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/bar.png" alt="img_dropdown"></a>
            </div>
            <div class="col-md-4">
                <img class="col-md-offset-2" src="<?= Yii::$app->request->baseUrl ?>/image/Profitday.png" alt="img_logo">
            </div>
            <div class="col-md-4">
                <span class="col-md-offset-5">| </span>
                <a class="color-text">ua</a><span> | </span>
                <a class="color-text">ru</a><span> | </span><a class="color-text">en</a><span> |</span><br><br>
                <a class="col-md-offset-5 color-text"><img src="<?= Yii::$app->request->baseUrl ?>/image/reg.png" alt="img_reg"> реєстрація</a>
            </div>
            <!--</div>-->
        </div>
    </div>
</header>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'nav nav-tabs docNavi',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'nav nav-tabs docNavi'],
        'items' => [
            ['label' => 'Головна', 'url' => ['/site/index']],
            ['label' => 'Для компаній', 'url' => ['/site/company']],
            ['label' => 'Найближчі заходи', 'url' => ['/site/index']],
            ['label' => 'Як це було', 'url' => ['/site/index']],
            ['label' => 'Стати програмістом', 'linkOptions'=>['id' => 'intita','class' => 'navbar-link']],
            ['label' => 'Вакансії для початківців', 'linkOptions'=>['id' => 'vacansion', 'class' => 'navbar-link']

            ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= $content ?>

    </div>
</div>

<footer class="footer">
    <div class="container-fluid" style="background-color: #d5d5d5;">
        <div class="container">
            <div class="row">
                <div style="margin-top: 20px; margin-bottom: 20px;"><img src="<?= Yii::$app->request->baseUrl ?>/image/Profitday.png" alt="img_logo"></div>
            </div>
            <div class="row">
                <div class="docNavi">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main">ГОЛОВНА</a></li>
                        <li><a href="#company">ДЛЯ КОМПАНІЙ</a></li>
                        <li><a href="#events">НАЙБЛИЖЧІ ЗАХОДИ</a></li>
                        <li><a href="#howWasIt">ЯК ЦЕ БУЛО</a></li>
                        <li><a href="#toBeProgrammer">СТАТИ ПРОГРАМІСТОМ</a></li>
                        <li><a href="#vacansy">ВАКАНСІЇ ДЛЯ ПОЧАТКІВЦІВ</a></li>
                        <li><a href="#members">ОРГАНІЗАТОРИ І УЧАСНИКИ</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="index-text">Реєструйтесь через соцмережi:</span>
                    <!--            </div>-->
                    <!--            <div class="col-md-3">-->
                    <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/twt.png"></a>
                    <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/vk.png"></a>
                    <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/g+.png"></a>
                    <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/fsbk.png"></a>
                    <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/in.png"></a>
                </div>
                <div class="col-md-5" style="color: #414141; text-align: end;">
                    <img src="<?= Yii::$app->request->baseUrl ?>/image/Phone.png" alt="img_phone">+38-0432-52-82-67 <img src="<?= Yii::$app->request->baseUrl ?>/image/Mail.png" alt="img_mail"> robotamolodi@gmail.com <img src="<?=Yii::$app->request->baseUrl ?>/image/Skype.png" alt="img_skype"> int.it
                </div>
            </div>
        </div>
    </div>
    <div class="author">2013-2016 ©  Створено Вінницькою IT-Академією</div>
</footer>
<script>
    $(document).ready(function(){
        $("#vacansion").click(function(){
            window.open("http://www.robotamolodi.org/ua_uk/vacancies?sphere=2");
        });
    });
    $(document).ready(function(){
        $("#intita").click(function(){
            window.open("http://www.intita.com");
        });
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
