<?php

// change the following paths if necessary
$yiit='E:\Frameworks\Yii\1.1.0\framework\yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
