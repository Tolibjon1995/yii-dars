<?php

namespace frontend\models;

use yii\base\Model;

class MyModel extends Model
{
    public $email;
    public $first_name;
    public $age;
    public $til;
    public $zipcode;
    public $about;
    public $gender;

    public function rules()
    {
        return [
            [['email', 'first_name', 'age', 'gender', 'about', 'zipcode', 'til'], 'required', 'message' => "Iltimos maydonni to'ldiring"],
            ['age', 'match', 'pattern' => '^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$'],
            ['zipcode', 'integer'],
            ['email', 'email'],
            ['first_name', 'string', 'max' => 20, 'min' => 3],
        ];
    }



    public function attributeLabels()
    {
        return [
            'first_name' => 'Ismi',
            'email' => 'Email',
            'age' => 'Parol',
        ];
    }


}