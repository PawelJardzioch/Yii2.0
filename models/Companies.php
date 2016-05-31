<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property integer $id
 * @property string $name
 * @property integer $active
 * @property string $footer
 * @property string $url
 * @property string $logo
 * @property integer $is_grupa_emmerson
 *
 * @property Profiles[] $profiles
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'active', 'footer', 'url', 'logo'], 'required'],
            [['active', 'is_grupa_emmerson'], 'integer'],
            [['footer'], 'string'],
            [['name', 'url'], 'string', 'max' => 64],
            [['logo'], 'string', 'max' => 32],
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
            'active' => 'Active',
            'footer' => 'Footer',
            'url' => 'Url',
            'logo' => 'Logo',
            'is_grupa_emmerson' => 'Is Grupa Emmerson',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['company_id' => 'id']);
    }
}
