<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $name
 * @property int $mentor_teacher_id
 * @property string $enrolled_at
 *
 * @property CourseEnrollment[] $courseEnrollments
 * @property Teacher $mentorTeacher
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mentor_teacher_id'], 'required'],
            [['mentor_teacher_id'], 'integer'],
            [['enrolled_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['mentor_teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::class, 'targetAttribute' => ['mentor_teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mentor_teacher_id' => 'Mentor Teacher ID',
            'enrolled_at' => 'Enrolled At',
        ];
    }

    /**
     * Gets query for [[CourseEnrollments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourseEnrollments()
    {
        return $this->hasMany(CourseEnrollment::class, ['student_id' => 'id']);
    }

    /**
     * Gets query for [[MentorTeacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMentorTeacher()
    {
        return $this->hasOne(Teacher::class, ['id' => 'mentor_teacher_id']);
    }
}
