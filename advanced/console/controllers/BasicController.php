<?php


namespace console\controllers;
use Yii;
use yii\console\Controller;

class BasicController extends Controller
{

    public function actionIndex(){
    echo"merhaba";
    return 0;
    }
    public function actionContent(){
      $users=Yii::$app->db
          ->createCommand('SELECT * FROM content')
          ->queryAll();
      print_r($users);
      return 0;
    }



}