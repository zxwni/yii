<?php

namespace app\controllers;

use app\models\Article;
use \yii\base\Controller;

class HomeController extends Controller
{

    public $layout='home';
    public function actionIndex()
    {
        $reques=\Yii::$app->request;
        $id=$reques->get('id');
        $sql="select * from Article where id=".$id;
        $res=Article::findBySql($sql)->all();
        dd($res);
        return $this->renderPartial('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    /*public function actionIndex()
    {
       $request=\Yii::$app->request;

        $user=[
            'username'=>'zxw'.'<script>alert(1)</script>',
            'age'=>10,
        ];
        $article=[
            'title'=>'哈哈哈哈',
        ];
//        $data=[
//            'user'=>$user,
//            'article'=>$article,
//        ];
//        dd($id);
//        return $this->render('index',compact('user','article'));
        return $this->renderPartial('index',compact('user','article'));
    }*/
}