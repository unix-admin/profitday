<?php

namespace app\controllers;

use app\models\Content;
use Yii;
use yii\web\Controller;
use app\models\ContactForm;
use app\models\Person;
use app\models\Company;
use app\models\City;

class SiteController extends Controller
{

    public function beforeAction($event)
    {
        $session = Yii::$app->session;
        !$session->isActive ? $session->open() : $session;
        $cookies = Yii::$app->request->cookies;
        if (isset($cookies['language'])) {
            Yii::$app->language = $cookies['language']->value;
        }
        else
        {
            $cookie = Yii::$app->response->cookies;
            $cookie->add(new \yii\web\Cookie([
                'name' => 'language',
                'value' => Yii::$app->language,
            ]));

        }
        return true;
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {   $model = new Content();
        return $this->render('index',[
            'model' => $model,
            'status' => '1',
            'type' =>'index',

        ]);
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }



    public function actionCompany()
    {
        $model = new Company();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->is_sponsor = 0;
                $model->is_organisator = 0;
                $model->save();
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
                return $this->refresh();
            }
        }
        return $this->render('company', [
            'model' => $model,
        ]);
    }

    public function actionPerson()
    {
        $model = new Person();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('person', [
            'model' => $model,
        ]);
    }
    public function actionCity()
    {
        $model = new City();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('city', [
            'model' => $model,
        ]);
    }

}
