<?php

use yii\db\Migration;

/**
 * Class m210622_204821_add_categories_table
 */
class m210622_204821_add_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name_ar' => $this->string(255),
            'name_an' => $this->string(512),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210622_204821_add_categories_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210622_204821_add_categories_table cannot be reverted.\n";

        return false;
    }
    */
}
