<?php


namespace yii2x\auth\ui;


class AuthExtUI implements \yii2x\auth\manager\base\AuthExtUI
{
    public function getViewMap(){
        return [
            'signin' => '@vendor/yii2x/yii2-auth-ui-ext/views/app',
            'signup' => '@vendor/yii2x/yii2-auth-ui-ext/views/app',
            'password_request' => '@vendor/yii2x/yii2-auth-ui-ext/views/app',
            'password_reset' => '@vendor/yii2x/yii2-auth-ui-ext/views/app'
        ];
    }
}
