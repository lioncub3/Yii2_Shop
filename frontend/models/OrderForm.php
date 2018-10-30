<?php
namespace frontend\models;

use Yii;
use yii\base\Model;


/**
 * Ad form
 */

class OrderForm extends Model{
  

    public $iduser;

    public function rules()
    {
        return [           
            [['iduser'], 'required'],      
            [['iduser'], 'integer'], 

        ];
    }

}