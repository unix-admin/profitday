<?php

/* @var $this yii\web\View */
$this->title = $model->getTitle($type,$status);

?>
<div class="site-index">
    <?= $model->getContent($type,$status)?>

</div>
<div class="row">
    <div class="col-md-12" style="text-align: center">
        <!--<div class="col-md-8 col-md-offset-5">-->
        <button id="regBut" class="regBut text-uppercase">реєструйтесь</button>
        <!--                <button class="btn btn-block" id="regBut">реєструйтесь</button>-->
        <!--</div>-->
    </div>
</div>
<div class="row">
    <!--<div class="col-md-12">-->
    <div class="col-md-8 col-md-offset-2">
        <span class="index-text">Реєструйтесь через соцмережi:</span>
        <!--            </div>-->
        <!--            <div class="col-md-3">-->
        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/twt.png"></a>
        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/vk.png"></a>
        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/g+.png"></a>
        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/fsbk.png"></a>
        <a href="#"><img src="<?= Yii::$app->request->baseUrl ?>/image/in.png"></a>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-1 col-sm-1 col-xs-1 orange-line"></div>
        <hr class="col-md-10" style="margin-top: 2px;">
    </div>
    <div class="row">
        <!--<div class="col-md-12">-->
        <div class="col-md-8 col-md-offset-2">
            <h3 class="subName">Організатори і учасники</h3>
            <div class="col-md-1 col-sm-1 col-xs-1 orange-line"></div>
            <hr class="col-md-10" style="margin-top: 2px;">
        </div>
        <!--</div>-->
    </div>
    <?=\app\components\LogoWidget::widget()?>
    <!--</div>-->

</div>
<script>
    $(document).ready(function(){
        $("#info").on("hide.bs.collapse", function(){
            $("#link").html('розгорнути<span class="glyphicon glyphicon-triangle-bottom" style="padding-left: 5px"></span>');
        });
        $("#info").on("show.bs.collapse", function(){
            $("#link").html('згорнути<span class="glyphicon glyphicon-triangle-top" style="padding-left: 5px"></span>');
        });
    });
    $(document).ready(function(){
        $("#info").on("hide.bs.collapse", function(){
            $("#link").html('розгорнути<span class="glyphicon glyphicon-triangle-bottom" style="padding-left: 5px"></span>');
        });
        $("#info").on("show.bs.collapse", function(){
            $("#link").html('згорнути<span class="glyphicon glyphicon-triangle-top" style="padding-left: 5px"></span>');
        });
    });
</script>