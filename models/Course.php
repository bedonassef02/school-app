<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property int $course_topic_id
 * @property int $teacher_id
 *
 * @property CourseEnrollment[] $courseEnrollments
 * @property CourseTopic $courseTopic
 * @property Teacher $teacher
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_topic_id', 'teacher_id'], 'required'],
            [['course_topic_id', 'teacher_id'], 'integer'],
            [['course_topic_id'], 'exist', 'skipOnError' => true, 'targetClass' => CourseTopic::class, 'targetAttribute' => ['course_topic_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::class, 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_topic_id' => 'Course Topic ID',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * Gets query for [[CourseEnrollments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourseEnrollments()
    {
        return $this->hasMany(CourseEnrollment::class, ['course_id' => 'id']);
    }

    /**
     * Gets query for [[CourseTopic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourseTopic()
    {
        return $this->hasOne(CourseTopic::class, ['id' => 'course_topic_id']);
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::class, ['id' => 'teacher_id']);
    }
}
