<?php

namespace app\controllers;

use yii\rest\Controller;
use app\models\User;
use yii\filters\auth\HttpBasicAuth;


class DataController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
            'auth' => function($username, $password) {
                $user = User::find()->where(['name' => $username])->one();
                if($user && $user->validatePassword($password))
                {
                    return $user;
                }
                return null;
            }
        ];
        return $behaviors;
    }

    public function actionTest()
    {
        return 'это сообщение видно только авторизованным!';
    }
}
