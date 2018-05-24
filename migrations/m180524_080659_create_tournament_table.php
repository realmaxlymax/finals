<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tournament`.
 */
class m180524_080659_create_tournament_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tournament', [
            'id' => $this->primaryKey(),
            'roster_id' => $this->integer()->notNull(),
            'event_name' => $this->string(200) ->notNull(),
            'location' => $this->string(200) ->notNull(),
        ]);
        $this->createIndex(
            'idx-tournament-roster_id',
            'tournament','roster_id'
        );
        $this->addForeignKey(
            'fk-tournament-roster',
            'tournament','roster_id',
            'roster', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-tournament-roster', 'tournament');
        $this->dropIndex('idx-tournament-roster_id', 'tournament');
        $this->dropTable('tournament');
    }
}
