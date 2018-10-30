<?php
namespace frontend\models;

use Yii;
use yii\base\Model;


/**
 * Ad form
 */

class OrderProductForm extends Model{
  

    public $idproduct;
    public $idorder;


  
    public function rules()
    {
        return [           
            [['idproduct','idorder'], 'required'],      
            [['idproduct','idorder'], 'integer'], 

        ];
    }

   
}