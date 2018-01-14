<?php

namespace yii2x\auth\ui;

use yii\web\AssetBundle;

class Ext62AuthenticationAppAsset extends AssetBundle
{
    protected static $appConfig = [

        'name' => 'Admin',

        'extend' =>  'Admin.Application',

        // Simply require all classes in the application. This is sufficient to ensure
        // that all Admin classes will be included in the application build. If classes
        // have specific requirements on each other, you may need to still require them
        // explicitly.
        //
        'requires' => [
            'Admin.*'
        ],

        'companyName' => 'MY COMPANY INC.',

        'api' => [
            'signin' => '/login.json',
            'signup' => '/register.json',
            'auth_code_request' => '/password.request.json',
            'password_reset' => '/password.reset.json',
            'terms' => '/terms.txt'
        ]   
    ];    
    
    public static function getAppConfig(){
        
        $appConfig = self::$appConfig;
        if(!empty(\Yii::$app->params['appConfig'])){
            $appConfig = array_merge($appConfig, \Yii::$app->params['appConfig']);
        }        
        return $appConfig;
    }
        
    
    
    public $publishOptions = [
      'forceCopy'=>true,
    ];          
    
    public $sourcePath = '@vendor/w3devlab/authentication-ui-ext/';
    public $css = [
        
        'build/production/Admin/modern/resources/Admin-all.css',
        'resources/css/style.css'

        ];
    public $js = [
        
        'build/production/Admin/modern/app.js',
        
    ];
    public $depends = [
        'app\assets\Ext62Framework'
    ];
}
