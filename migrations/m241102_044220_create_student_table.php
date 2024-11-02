<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student}}`.
 */
class m241102_044220_create_student_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'mentor_teacher_id' => $this->integer()->notNull(),
            'enrolled_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-student-mentor_teacher_id',
            '{{%student}}',
            'mentor_teacher_id',
            '{{%teacher}}',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-student-mentor_teacher_id', '{{%student}}');
        $this->dropTable('{{%student}}');
    }

}
