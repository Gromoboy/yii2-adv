<?php
namespace console\controllers;

use yii\console\Controller;

class ConsoleGreatingsController extends Controller
{
    public function actionIndex() 
    {
        echo 'Hello world' . PHP_EOL;
        return 0;
    }
}

?>