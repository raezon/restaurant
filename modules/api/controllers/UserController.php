<?php

namespace app\modules\api\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\rest\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\modules\api\models\LoginForm;
use app\modules\api\models\SignUpForm;
use app\models\ContactForm;

class UserController extends Controller
{

    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
            return $model->getUser();
           // return $model->getUser()->toArray(['id','access_token','username']);
        }

        Yii::$app->response->statusCode = 422;
        return [
            'errors' => $model->errors
        ];
    }
    public function actionSignUp()
    {

        $model = new SignUpForm();
        if ($model->load(Yii::$app->request->post(), '') && $model->register()) {
            return $model->user;
        }

        Yii::$app->response->statusCode = 422;
        return [
            'errors' => $model->errors
        ];
    }


}
