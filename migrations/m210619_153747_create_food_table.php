<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%food}}`.
 */
class m210619_153747_create_food_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%food}}', [
            'id' => $this->primaryKey(),
            'name_ar' => $this->string(255),
            'name_an' => $this->string(512),
            'type' => $this->string(512),
            'price' => $this->float(100),
            'picture' => $this->string(512),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'created_by'=>$this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%food}}');
    }
}
