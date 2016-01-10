<?php
/**
 * Created by PhpStorm.
 * User: adm
 * Date: 10.01.2016
 * Time: 14:12
 */


namespace app\components;
use app\models\Company;
use Yii;
use yii\base\Widget;



class LogoWidget extends Widget
{
    public function run()
    {

        return $this->prepareDivs($this->getCompaniesLogo());
    }

    private function getCompaniesLogo()
    {
        $organisators =Company::find()->where(['is_organisator' => '1'])->orderBy('order')->all();
        $organisatorsAndMembers = [];

        foreach ($organisators as $value)
        {
            $organisatorsAndMembers[$value->attributes['id']]['name'] =  $value->attributes['name'];
            if ($value->attributes['logo_url'] != '')
            {
                $organisatorsAndMembers[$value->attributes['id']]['url'] =  'http://'.Yii::$app->request->serverName.$value->attributes['logo_url'];
            }
            else
            {
                $organisatorsAndMembers[$value->attributes['id']]['url'] = 'http://' . Yii::$app->request->serverName . '/files/logo/no_logo.jpg';
            };
            $organisatorsAndMembers[$value->attributes['id']]['intro'] =  $value->attributes['intro_'.Yii::$app->language];
            $organisatorsAndMembers[$value->attributes['id']]['site'] =  $value->attributes['site'];
        }
        $members =Company::find()->where(['is_sponsor' => '1'])->orderBy('order')->all();
        foreach ($members as $value)
        {
            $organisatorsAndMembers[$value->attributes['id']]['name'] =  $value->attributes['name'];
            if ($value->attributes['logo_url'] != '')
            {
                $organisatorsAndMembers[$value->attributes['id']]['url'] =  'http://'.Yii::$app->request->serverName.$value->attributes['logo_url'];
            }
            else
            {
                $organisatorsAndMembers[$value->attributes['id']]['url'] = 'http://' . Yii::$app->request->serverName . '/files/logo/no_logo.jpg';
            };
            $organisatorsAndMembers[$value->attributes['id']]['intro'] =  $value->attributes['intro_'.Yii::$app->language];
            $organisatorsAndMembers[$value->attributes['id']]['site'] =  $value->attributes['site'];
        }
        return $organisatorsAndMembers;
    }

    private function prepareDivs($items)
    {
        $divs = '';
        $iterator = 0;
        $intro = '';
        foreach ($items as $item)
        {
            if ($iterator%2==0)
            {
                     $divs = $divs.'<div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            <div class="col-sm-6 mainOrg">
                                <img src="'.$item['url'].'" alt="img_logo_se">
                            </div>';
                $intro = $intro.'<div class="row">
                    <div id="info" class="col-md-8 col-md-offset-2 collapse">
                        <div class="col-sm-6 line mainOrgInfo">'
                                          .$item['intro'].', <a class="orange-text" href="'.$item['site'].'">'.$item['site'].'</a>
                        </div>';

            }
            else
            {
                $divs = $divs.'<div class="col-sm-6 mainOrg">
                                <img src="'.$item['url'].'" alt="img_logo_se">
                            </div>
                    </div>
                </div>'.
                    $intro.'<div class="col-sm-6 line mainOrgInfo">'
                                          .$item['intro'].', <a class="orange-text" href="'.$item['site'].'">'.$item['site'].'</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-sm-6 horizontal-line-collapse"></div>
                        <a href="#info" data-toggle="collapse" class="col-sm-3 text-center" id="link">розгорнути
                            <span class="glyphicon glyphicon-triangle-bottom" style="padding-left: 5px"></span>
                        </a>
                        <div class="col-sm-3 horizontal-line-collapse"></div>
                    </div>
                </div>
        '
                ;
                $intro ='';
            };
            $iterator++;
        }
        if ($iterator%2!=0)
        {

            $divs = $divs.'<div class="col-md-6 mainOrg" style=\'border-style:none;\'>
                                </div>
                        </div>
                </div> <div class="col-sm-6 line mainOrgInfo">
                            </div>
                    </div>
                     <div class="col-md-8 col-md-offset-2">
                        <div class="col-sm-6 horizontal-line-collapse"></div>
                        <a href="#info" data-toggle="collapse" class="col-sm-3 text-center" id="link">розгорнути
                            <span class="glyphicon glyphicon-triangle-bottom" style="padding-left: 5px"></span>
                        </a>
                        <div class="col-sm-3 horizontal-line-collapse"></div>
                    </div>
                </div>
            </div>
        ';
        }

        return $divs;
    }

}