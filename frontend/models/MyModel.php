<?php

namespace frontend\models;

use yii\base\Model;

class MyModel extends Model
{
//    public $username;
//    public $email;
//    public $password;
//    public $age;

    public $firstname;
    public $gender;
    const SONLAR = ['bir', 'ikki', 'uch'];

    public function rules()
    {
        return [
            [['gender', 'firstname'], 'string'],
            [['gender', 'firstname'], 'required'],
        ];
    }
}