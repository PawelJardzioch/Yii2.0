<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property integer $id
 * @property string $name
 * @property integer $galactica_oddzial_id
 * @property integer $active
 * @property string $city
 * @property integer $investment
 * @property integer $investment_id
 *
 * @property Profiles[] $profiles
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'active'], 'required'],
            [['galactica_oddzial_id', 'active', 'investment', 'investment_id'], 'integer'],
            [['name', 'city'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'galactica_oddzial_id' => 'Galactica Oddzial ID',
            'active' => 'Active',
            'city' => 'City',
            'investment' => 'Investment',
            'investment_id' => 'Investment ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['team_id' => 'id']);
    }
}
