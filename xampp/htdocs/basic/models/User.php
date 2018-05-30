<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $iduser
 * @property string $username
 * @property string $email
 * @property string $dob
 * @property string $mobile
 * @property string $password
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iduser'], 'required'],
            [['iduser'], 'integer'],
            [['dob'], 'safe'],
            [['username', 'email', 'mobile', 'password'], 'string', 'max' => 45],
            [['iduser'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'username' => 'Username',
            'email' => 'Email',
            'dob' => 'Dob',
            'mobile' => 'Mobile',
            'password' => 'Password',
        ];
    }
}
