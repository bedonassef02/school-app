<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teacher}}`.
 */
class m241102_043451_create_teacher_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'started_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function safeDown(){
        $this->dropTable("{{%teacher}}");
    }

}
