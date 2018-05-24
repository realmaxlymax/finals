<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roster".
 *
 * @property int $id
 * @property int $team_id
 * @property string $team_captain
 * @property string $no_players
 */
class roster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'roster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'team_id', 'team_captain', 'no_players'], 'required'],
            [['id', 'team_id'], 'integer'],
            [['team_captain', 'no_players'], 'string', 'max' => 200],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'team_id' => 'Team ID',
            'team_captain' => 'Team Captain',
            'no_players' => 'No Players',
        ];
    }
}
