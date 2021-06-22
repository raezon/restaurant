<?php
/**
 * User: TheCodeholic
 * Date: 3/7/2020
 * Time: 9:35 AM
 */

namespace app\modules\api\controllers;

use app\models\Category;

use yii\data\ActiveDataProvider;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\rest\ActiveController;

/**
 * Class NotesController
 *
 * @author ammar djebabla <amardjebabla10@gmail.com>
 * @package app\modules\api\controllers
 */
class CategoryController extends ActiveController
{
    public $modelClass = Category::class;
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        // Options 1: Authenticator works on every action except options
//        $behaviors['authenticator']['except'] = ['options'];
//        $behaviors['authenticator']['authMethods'] = [
//            HttpBearerAuth::class
//        ];
//        $behaviors['cors'] = [
//            'class' => Cors::class
//        ];
        // Options 2: Remove authenticator, Add Cors and then Add authenticator
    
        $behaviors['authenticator']['authMethods'] = [
            HttpBearerAuth::class
        ];
       // unset($behaviors['authenticator']);
       // $behaviors['cors'] = [
       //     'class' => Cors::class
       // ];
       // $behaviors['authenticator'] = $auth;

        return $behaviors;
    }


  
}