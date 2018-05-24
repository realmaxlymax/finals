<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roster".
 *
 * @property int $id
 * @property int $team_id
 * @property string $team_captain
 * @property int $no_players
 *
 * @property Team $team
 * @property Tournament[] $tournaments
 */
class Roster extends \yii\db\ActiveRecord
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
            [['team_id', 'team_captain', 'no_players'], 'required'],
            [['team_id', 'no_players'], 'integer'],
            [['team_captain'], 'string', 'max' => 200],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'id']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournaments()
    {
        return $this->hasMany(Tournament::className(), ['roster_id' => 'id']);
    }
}
