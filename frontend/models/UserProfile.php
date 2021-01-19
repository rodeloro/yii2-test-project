<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class UserProfile extends Model
{
 
    public $name;
    public $second_name;
    public $surname;
    public $gender;
    public $date_of_birth;

    public function rules()
    {
        $rules = [];
        return $rules;
    }

    public function getGender()
    {
        switch($this->gender){
            case 0: return "Female";
            case 1: return "Male";
            default: "";
        }
    }

    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    public function attributeLabels()
    {
        return [
        ];
    } 
}