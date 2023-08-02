<?php

namespace frontend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
//        $product = Yii::$app->db->createCommand('SELECT COUNT(*) FROM products')->queryScalar();

        $product = (new Query())
            ->select('*')
            ->from('products')
//            ->where(['between','productCode','S10_1678','S18_3856'])
//            ->where(['like','productCode','S10'])
            ->orderBy(['productCode'=> SORT_DESC])
            ->all();

        return $this->render('index',[
            "product"=>$product
            ]);
    }
}