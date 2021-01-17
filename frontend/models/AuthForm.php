<?php

namespace frontend\models;

use Yii;
use common\models\LoginForm;

class AuthForm extends LoginForm
{
    public $verifyCode;
    public $msg;
    public $use_captcha;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['verifyCode', 'captcha'];
        $rules[] = ['msg', 'string'];
        $rules[] = ['use_captcha','boolean'];
        return $rules;
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

}