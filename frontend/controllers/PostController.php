<?php

namespace frontend\controllers;

use frontend\models\MyModel;
use yii\web\Controller;
use Yii;

class PostController extends Controller
{
    public function actionList()
    {
        $mymodel = new MyModel();
        if (Yii::$app->request->isPost) {
            $mymodel->load(Yii::$app->request->post(), '');


            if ($mymodel->validate()) {
                Yii::$app->session->setFlash('success', "Validatsiyadan o'tdi");
            } else {
                Yii::$app->session->setFlash('danger', $mymodel->getErrorSummary(true)[0]);
            }

        }
        return $this->render('list',['model'=>$mymodel]);
    }

    public function actionAdd()
    {
        $model = new MyModel();
        return $this->render('add', [
            "model" => $model
        ]);
    }
}