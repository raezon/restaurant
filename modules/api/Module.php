<?php
namespace app\modules\api;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public function actionIndex(){
        return $this->renderContent('Hello');
    }
   
}
