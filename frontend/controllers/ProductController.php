<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\OrderForm;
use frontend\models\OrderProductForm;
use common\models\Product;
use common\models\Order;
use yii\web\UploadedFile;
use yii\db\Query;


/**
 * Ad controller
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {              
        $model = Product::find()->all();
        
       return $this->render('index',[ 'model' => $model]);

    }


    public function actionBasket()
    {      
        $model = new OrderForm();     
        $request = Yii::$app->request;

        if (Yii::$app->request->isPost) {
            $ad=new Order();
            $ad->iduser = $model->iduser;
            $ad->save();
        }

        return $this->render('basket');
    }
}


