<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "branches".
 *
 * @property integer $id
 * @property integer $city_id
 * @property string $name
 * @property integer $active
 * @property string $district
 * @property string $address
 * @property string $zip_code
 * @property integer $phone_area_code
 * @property integer $phone_number
 * @property integer $fax_number
 * @property string $email
 * @property string $photo
 * @property string $symbol
 *
 * @property Cities $city
 * @property Profiles[] $profiles
 * @property Rooms[] $rooms
 */
class Branches extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branches';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id', 'active', 'phone_area_code', 'phone_number', 'fax_number'], 'integer'],
            [['name', 'active', 'district', 'address', 'zip_code', 'phone_area_code', 'phone_number', 'fax_number', 'email', 'photo', 'symbol'], 'required'],
            [['name', 'district', 'address', 'symbol'], 'string', 'max' => 64],
            [['zip_code'], 'string', 'max' => 6],
            [['email', 'photo'], 'string', 'max' => 32],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'City ID',
            'name' => 'Name',
            'active' => 'Active',
            'district' => 'District',
            'address' => 'Address',
            'zip_code' => 'Zip Code',
            'phone_area_code' => 'Phone Area Code',
            'phone_number' => 'Phone Number',
            'fax_number' => 'Fax Number',
            'email' => 'Email',
            'photo' => 'Photo',
            'symbol' => 'Symbol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['branch_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Rooms::className(), ['branchId' => 'id']);
    }
}
