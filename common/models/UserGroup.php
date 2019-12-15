<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_groups".
 *
 * @property int $user_id ID пользователя
 * @property int $group_id ID группы
 * @property int|null $updated_at Дата обновления
 * @property string|null $comment Примечание
 */
class UserGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'group_id'], 'required'],
            [['user_id', 'group_id', 'updated_at'], 'integer'],
            [['comment'], 'string', 'max' => 250],
            [['user_id', 'group_id'], 'unique', 'targetAttribute' => ['user_id', 'group_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'ID пользователя',
            'group_id' => 'ID группы',
            'updated_at' => 'Дата обновления',
            'comment' => 'Примечание',
        ];
    }
}
