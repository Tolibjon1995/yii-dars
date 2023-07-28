<?php

namespace frontend\models;

use yii\base\Model;

class MyModel extends Model
{
    public $email;
    public $first_name;
    public $age;
    public $gender;

    public function rules()
    {
        return[
            [['email', 'first_name', 'age'], 'required', 'message'=>"Iltimos maydonni to'ldiring"],
            ['age', 'integer'],
            ['email', 'email'],
            ['first_name', 'string', 'max'=>20, 'min'=>3],
        ];
    }

    public function attributeLabels()
    {
        return [
            'first_name'=>'Ismi',
            'email'=>'Email',
            'age'=>'Yoshi',
        ];
    }


}