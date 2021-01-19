<?php

namespace frontend\models;

use Yii;
use common\models\LoginForm;

class AuthForm extends LoginForm
{
    public $verifyCode;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['verifyCode', 'captcha', 'on'=>'captchaRequired'];
        return $rules;
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }   
}