<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job_titles".
 *
 * @property integer $id
 * @property string $name
 * @property integer $priority
 * @property integer $active
 *
 * @property Profiles[] $profiles
 */
class JobTitles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_titles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'priority', 'active'], 'required'],
            [['priority', 'active'], 'integer'],
            [['name'], 'string', 'max' => 64],
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
            'priority' => 'Priority',
            'active' => 'Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['job_title_id' => 'id']);
    }
}
