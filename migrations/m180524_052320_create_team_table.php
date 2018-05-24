<?php

use yii\db\Migration;

/**
 * Handles the creation of table `team`.
 */
class m180524_052320_create_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('team', [
            'id' => $this->primaryKey(),
            'team_name' => $this->string(200)->notNull(),
            'country' => $this->string(200)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('team');
    }
}
