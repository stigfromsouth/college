<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "exam_log".
 *
 * @property int $id
 * @property int $student_id ID студента
 * @property int $teacher_id ID преподавателя
 * @property int $discipline_id ID предмета
 * @property string $exam_theme Тема оцениваемой работы
 * @property int $valuation Оценка работы
 * @property int $signed_at Дата получения оценки
 */
class ExamLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exam_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'teacher_id', 'discipline_id', 'exam_theme', 'valuation', 'signed_at'], 'required'],
            [['student_id', 'teacher_id', 'discipline_id', 'valuation', 'signed_at'], 'integer'],
            [['exam_theme'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'ID студента',
            'teacher_id' => 'ID преподавателя',
            'discipline_id' => 'ID предмета',
            'exam_theme' => 'Тема оцениваемой работы',
            'valuation' => 'Оценка работы',
            'signed_at' => 'Дата получения оценки',
        ];
    }
}
