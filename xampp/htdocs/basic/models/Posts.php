<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $idPosts
 * @property string $Postscol
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPosts'], 'required'],
            [['idPosts'], 'integer'],
            [['Postscol'], 'string', 'max' => 45],
            [['idPosts'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPosts' => 'Id Posts',
            'Postscol' => 'Postscol',
        ];
    }
}
