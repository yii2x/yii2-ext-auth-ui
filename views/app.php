<?php

use yii\helpers\Html;
use yii2x\auth\ui\Ext62AuthenticationAppAsset;

Ext62AuthenticationAppAsset::register($this);

$appConfig = Ext62AuthenticationAppAsset::getAppConfig();

?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10, user-scalable=yes">
    <meta charset="UTF-8">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

 
    
</head>
<body>
<?php $this->beginBody() ?>

<?php $this->endBody() ?>    
    
    <script type="text/javascript">
        
        Ext.application(<?= \yii\helpers\Json::encode($appConfig) ?>);

    </script>
    

</body>
</html>
<?php $this->endPage() ?>