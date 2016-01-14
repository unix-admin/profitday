<?php

namespace app\modules\admin\controllers;

class PhotosController extends \yii\web\Controller
{
    public function actionInsert()
    {
        return $this->render('insert');
    }

}
