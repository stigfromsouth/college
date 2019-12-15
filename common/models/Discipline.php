<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "discipline".
 *
 * @property int $id
 * @property string $discipline_name Наименование предмета
 */
class Discipline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discipline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['discipline_name'], 'required'],
            [['discipline_name'], 'string', 'max' => 128],
            [['discipline_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'discipline_name' => 'Наименование предмета',
        ];
    }
}
