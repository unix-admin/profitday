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
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <div class="row">
            <div class="col-lg-offset-3 col-lg-7 " id="company-careerDay">
                <h2>День кар'єри &laquoPROFI DAY&raquo</h2>
                <hr class="company-hr-normal">
                <hr class="company-hr-yellow">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-3 col-lg-7 " id="company-mainContent">
                <p>
                    організується з метою пошуку працівників компаніями, рекламування навчальних закладів і курсів, які     <br>
                    готують спеціалістів та для популяризації IT сфери і IT професій (тестувальник, програміст, системній   <br>
                    адміністратор та інші) серед молоді.                                                                    <br>
                    Даний захід представляє собою-поєднання дня кар'єри і ярмарки вакансій для спеціалістів, виставку       <br>
                    навчальних закладів, які готують спеціалістів для ринку праці та презентації компаній (їх напрямки      <br>
                    діяльності та технології з якими вони працюють, умови роботи, партнери, замовники, корпоративні         <br>
                    особливості, плани на майбутнє тощо)
                </p>
                <h2 class="company-contentH2">В програмі</h2>
                <p>
                    передові компанії проводитимуть презентациї, прийматимуть CV від кандидатів, проводитимуть семінари,    <br>
                    тренінги та майстер-класи.                                                                              <br>
                    Навчальні заклади також презентуватимуть умови прийому та навчання, перспективи напрямків за якими      <br>
                    вони готують.
                </p>
                <h2 class="company-contentH2">Для вас</h2>
                <span>презентація своєї компанії та кар'єрних можливостей для молодих спеціалістів;</span>
                <ul id="company-ul">
                    <li><span>підбір талановитих та кар'єрних можливостей для молодих свеціалістів;</span></li>
                    <li><span>налагодження нових бізнес-контаків із потенціальними парнтерами та клієнтами;</span></li>
                    <li><span>розповсюдження власних рекламних матеріалів;</span></li>
                    <li><span>реклама компанії в рамках потужної промо-компанії проекту по Україні;</span></li>
                    <li><span>набір кадрового резерву на сезонні періоди та тимчасові роботи;</span></li>
                    <li><span>покращення іміджу компанії серед молоді;</span></li>
                </ul>
                На <span id="company-PDOrange">&laquoPROFIDAY&raquo</span> запрошені молоді люди, які шукають чи хочуть змінити
                роботу, студенти та школярі.
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-offset-4 col-lg-7" id="company-motoWord">
                Участь у проекті надасть можливість створити позитивний імідж соціально-відповідальної <br>
                компанії яка підтримує молодь, а також внутрішньо переміщених осіб
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-5 col-xs-4">
                <a href="#" class="btn btn-primary btn-lg" id="company-butReg">    РЕЄСТРУЙТЕСЬ    </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-3 col-lg-7" id="company-margin-bottom">
                <div id="company-shareText">Реєструйтесь через соцмережі: </div>
                <div class="soc" data-buttoncolor="#999" data-iconcolor="#fff" >
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
                <hr class="company-hr-normal">
                <hr class="company-hr-yellow">
            </div>
        </div>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<script type="text/javascript" src="soc.js/soc.min.js"></script><!--JS for footer-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
