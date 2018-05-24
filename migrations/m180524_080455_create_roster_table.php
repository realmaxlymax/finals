<?php

use yii\db\Migration;

/**
 * Handles the creation of table `roster`.
 */
class m180524_080455_create_roster_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('roster', [
            'id' => $this->primaryKey(),
            'team_id' => $this->integer()->notNull(),
            'team_captain' => $this->string(200) ->notNull(),
            'no_players' => $this->integer(200) ->notNull(),
        ]);
        $this->createIndex(
            'idx-roster-team_id',
            'roster','team_id'
        );
        $this->addForeignKey(
            'fk-roster-team',
            'roster','team_id',
            'team', 'id'
        );
    
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-roster-team', 'roster');
        $this->dropIndex('idx-roster-team_id', 'roster');
        $this->dropTable('roster');
    }
}
