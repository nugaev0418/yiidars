<?php

namespace frontend\models;

use yii\base\Model;

class Person extends Model
{
    public $gender;
    public $firstname;
    public $age;

    public function rules()
    {
        return [
            [['gender', 'firstname'], 'required'],
            [['gender', 'firstname'], 'string'],
            ['age', 'integer']
        ];
    }

}