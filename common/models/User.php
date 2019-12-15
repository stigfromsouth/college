<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login Логин пользователя
 * @property string|null $name ФИО пользователя
 * @property string $email Электронная почта пользователя
 * @property string|null $password Пароль пользователя
 * @property string|null $born_date Дата рождения пользователя
 * @property string|null $gender Пол
 * @property int|null $updated_at Дата обновления
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'email'], 'required'],
            [['born_date'], 'safe'],
            [['updated_at'], 'integer'],
            [['login'], 'string', 'max' => 128],
            [['name', 'email'], 'string', 'max' => 250],
            [['password', 'gender'], 'string', 'max' => 255],
            [['login'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Логин пользователя',
            'name' => 'ФИО пользователя',
            'email' => 'Электронная почта пользователя',
            'password' => 'Пароль пользователя',
            'born_date' => 'Дата рождения пользователя',
            'gender' => 'Пол',
            'updated_at' => 'Дата обновления',
        ];
    }
}
