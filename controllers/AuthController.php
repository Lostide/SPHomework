<?php

namespace app\controllers;

use yii\rest\Controller;

use app\models\User;

use yii\web\BadRequestHttpException;

class AuthController extends Controller
{
    
    public function actionLogin()
    {
        $data = \Yii::$app->request->post();
        if(isset($data['password'])&&isset($data['name']))
        {
        $password = $data['password'];
        $name = $data['name'];
        }
        else
        {
            throw new BadRequestHttpException('Password and Name field required');
        }
        $user=User::find()->where(['name' =>  $name])->one();
        
        if($user && $user->validatePassword($password))
        {
            return ['success'=> true];
        }


        return ['success'=> false , 'message' => 'Username or password is incorrect'];
    }
}
