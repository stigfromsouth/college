<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "users_roles".
 *
 * @property int $user_id ID пользователя
 * @property int $role_id ID роли пользователя
 * @property int $updated_at Дата обновления
 * @property string|null $comment Примечание
 */
class UserRole extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_roles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'role_id', 'updated_at'], 'required'],
            [['user_id', 'role_id', 'updated_at'], 'integer'],
            [['comment'], 'string', 'max' => 250],
            [['user_id', 'role_id'], 'unique', 'targetAttribute' => ['user_id', 'role_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'ID пользователя',
            'role_id' => 'ID роли пользователя',
            'updated_at' => 'Дата обновления',
            'comment' => 'Примечание',
        ];
    }
}
