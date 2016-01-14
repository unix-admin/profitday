<?php
/**
 * Created by PhpStorm.
 * User: adm
 * Date: 14.01.2016
 * Time: 13:49
 */
use Yii;
use yii\bootstrap\Modal;
use mihaildev\elfinder;

$photos ='';

foreach ($photo as $item)
{

    echo '<span><p><img src="http://'.Yii::$app->request->serverName.$item['photo_path'].'"/>
    <a class="btn btn-primary btn-sm" href="photoedit?id='.$item['id'].'&event='.$event.'" role="button">Змінити</a>
    <a class="btn btn-danger btn-sm" href="/admin/photos/delete?id='.$item['id'].'&event='.$event.'" role="button"  data-confirm="Ви впевнені, що хочете видалити цей елемент?" data-method="post" data-pjax="0">Видалити</a>
    </p>
    </span>';
}


echo '<span><p><a class="btn btn-primary btn-sm" href="/admin/photos/create?event='.$event.'"
            role="button">Додати фото</a></a></p></span>'
?>