<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 */
class m241102_045629_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'course_topic_id' => $this->integer()->notNull(),
            'teacher_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-course-teacher_id',
            '{{%course}}',
            'teacher_id',
            '{{%teacher}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-course-course_topic_id',
            '{{%course}}',
            'course_topic_id',
            '{{%course_topic}}',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-course-teacher_id', '{{%course}}');
        $this->dropForeignKey('fk-course-course_topic_id', '{{%course}}');
        $this->dropTable('{{%course}}');
    }

}
