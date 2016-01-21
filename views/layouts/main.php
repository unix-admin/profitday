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
    <link rel="stylesheet" type="text/css" href="/js/soc.js/soc.min.css">
</head>

<body>

<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Головна', 'url' => ['/site/index']],
            ['label' => 'Для компаній', 'url' => ['/site/about']],
            ['label' => 'Найближчі заходи', 'url' => ['/site/contact']],
            ['label' => 'Як це було', 'url' => ['/site/person']],
            ['label' => 'Вакансії для початківців', 'url' => ['/site/person']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?php echo LanguageSwitcherWidget::widget(); ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div id="footer_background">
        <div class="container">
            <div id="footer_bg">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="images/footerLogo.png" alt="ProfitDay"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 hidden-md hidden-sm hidden-xs">
                        <div id="footer_menu">
                            <ul class="footer_ul">
                                <li ><a class="footer_li-li" href="#"><span class="footer_colorLi"> ГОЛОВНА </span></a></li>
                                <li ><a class="footer_li-li" href="#"><span class="footer_colorLi"> ДЛЯ КОМПАНІЙ </span></a></li>
                                <li ><a class="footer_li-li" href="#"><span class="footer_colorLi"> НАЙБЛИЖЧІ ЗАХОДИ </span></a></li>
                                <li ><a class="footer_li-li" href="#"><span class="footer_colorLi"> ЯК ЦЕ БУЛО </span></a></li>
                                <li ><a class="footer_li-li" href="#"><span class="footer_colorLi"> СТАТИ ПРОГРАМІСТОМ </span></a></li>
                                <li ><a class="footer_li-li" href="#"><span class="footer_colorLi"> ВАКАНСІЇ ПОЧАТКІВЦІЙ </span></a></li>
                                <li ><a class="footer_li-li" href="#"><span class="footer_colorLi"> ОРГАНІЗАТОРИ І УЧАСНИКИ </span></a></li>
                            </ul>
                            <hr id="footer_hr" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="footer_shareText">
                            поділить в соцмережах:
                        </div>
                        <div class="soc" data-buttoncolor="#999" data-iconcolor="#fff">
                            <a href="" class="soc-twitter" title="Twitter" onmouseover="style.background='#f07c00'"
                               onmouseout="this.style.background='#999'"></a>
                            <a href="" class="soc-vkontakte" title="VK" onmouseover="this.style.background='#f07c00'"
                               onmouseout="this.style.background='#999'"></a>
                            <a href="" class="soc-google" title="G+" onmouseover="this.style.background='#f07c00'"
                               onmouseout="this.style.background='#999'"></a>
                            <a href="" class="soc-facebook" title="Facebook" onmouseover="this.style.background='#f07c00'"
                               onmouseout="this.style.background='#999'"></a>
                            <a href="" class="soc-linkedin" title="LinkedIn" onmouseover="this.style.background='#f07c00'"
                               onmouseout="this.style.background='#999'"></a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <div class="footer_contactsPD">
                        <span>
                            <img src="images/Phone.png" alt="phone">
                            +38-0432-52-82-67
                            <img src="images/Mail.png" alt="phone">
                            robotamolodi@gmail.com
                            <img src="images/skp.png" alt="phone">
                            int.it
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span id="footer_copy">2013-2016 &copy; створено Вінницькою ІT-академією</span>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/soc.js/soc.min.js"></script><!--JS for footer-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
