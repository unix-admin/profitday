<?php
/**
 * Created by PhpStorm.
 * User: adm
 * Date: 14.01.2016
 * Time: 13:43
 */

namespace app\components;
namespace app\components;

use app\models\Photos;
use Faker\Provider\tr_TR\PhoneNumber;
use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class PhotoWidget extends  Widget
{
    public $eventId;

    public  function  init()
    {
        parent::init();
    }

    public function run()
    {

        $array = ArrayHelper::toArray(Photos::findAll(['event_id' => $this->eventId]));

        return $this->render('photo',['photo' => $array, 'event' => $this->eventId ]);
    }
}