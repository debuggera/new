<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class AddForm extends Model
{
    public $brand;
    public $model;
    public $price;
    public $phone;
    public $additions;
    public $mileage;


    public function rules()
    {
        return [
            [['brand','model','price','phone','mileage'], 'required'],

        ];


    }

}