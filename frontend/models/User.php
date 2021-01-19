<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 * @property int|null $incorrect_tries
 * @property int|null $blocked_to_date
 * @property int|null $user_type
 * @property string|null $first_name
 * @property string|null $second_name
 * @property string|null $surname
 * @property int|null $gender
 * @property int|null $date_of_birth
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'incorrect_tries', 'blocked_to_date', 'user_type', 'gender', 'date_of_birth'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token', 'first_name', 'second_name', 'surname'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'incorrect_tries' => 'Incorrect Tries',
            'blocked_to_date' => 'Blocked To Date',
            'user_type' => 'User Type',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'surname' => 'Surname',
            'gender' => 'Gender',
            'date_of_birth' => 'Date Of Birth',
        ];
    }
}
