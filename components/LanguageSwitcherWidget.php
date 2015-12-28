<?php
namespace app\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;



class LanguageSwitcherWidget extends Widget
{
    public function run()
    {
       foreach(Yii::$app->params['translatedLanguages'] as $key => $language)
       {
           echo'<span class="language" id="'.$key.'">'.$language.'|</span>';
       }
    }
}
?>