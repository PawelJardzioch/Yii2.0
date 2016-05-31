<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $licence_number
 * @property integer $phone_number
 * @property integer $internal_phone_number
 * @property integer $fax_number
 * @property string $print_login
 * @property string $print_pass
 * @property integer $rfid_card
 * @property string $about
 * @property string $date
 * @property string $dateEND
 * @property string $dateBirthday
 * @property integer $is_fake_user
 * @property integer $is_active
 * @property string $name
 * @property integer $mobile_phone_number
 * @property integer $contest_team_id
 * @property string $password_hash
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $avatarImage
 * @property string $role
 * @property integer $priority
 *
 * @property Ads[] $ads
 * @property Banners[] $banners
 * @property Checklist $checklist
 * @property ContestDepartments[] $contestDepartments
 * @property ContestEntries[] $contestEntries
 * @property DevApplications[] $devApplications
 * @property DevCustomers[] $devCustomers
 * @property ItHelpdesk[] $itHelpdesks
 * @property ItHelpdesk[] $itHelpdesks0
 * @property Notes[] $notes
 * @property Reservations[] $reservations
 * @property UserProfiles[] $userProfiles
 * @property Profiles[] $profiles
 * @property UsersRolesTransakcje[] $usersRolesTransakcjes
 * @property Roles[] $roles
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'is_fake_user', 'name', 'auth_key'], 'required'],
            [['licence_number', 'phone_number', 'internal_phone_number', 'fax_number', 'rfid_card', 'is_fake_user', 'is_active', 'mobile_phone_number', 'contest_team_id', 'priority'], 'integer'],
            [['about'], 'string'],
            [['date', 'dateEND', 'dateBirthday'], 'safe'],
            [['username', 'password', 'name', 'password_hash'], 'string', 'max' => 64],
            [['print_login', 'print_pass'], 'string', 'max' => 4],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'string', 'max' => 255],
            [['avatarImage'], 'string', 'max' => 128],
            [['role'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'licence_number' => 'Licence Number',
            'phone_number' => 'Phone Number',
            'internal_phone_number' => 'Internal Phone Number',
            'fax_number' => 'Fax Number',
            'print_login' => 'Print Login',
            'print_pass' => 'Print Pass',
            'rfid_card' => 'Rfid Card',
            'about' => 'About',
            'date' => 'Date',
            'dateEND' => 'Date End',
            'dateBirthday' => 'Date Birthday',
            'is_fake_user' => 'Is Fake User',
            'is_active' => 'Is Active',
            'name' => 'Name',
            'mobile_phone_number' => 'Mobile Phone Number',
            'contest_team_id' => 'Contest Team ID',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'avatarImage' => 'Avatar Image',
            'role' => 'Role',
            'priority' => 'Priority',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasMany(Ads::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanners()
    {
        return $this->hasMany(Banners::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChecklist()
    {
        return $this->hasOne(Checklist::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContestDepartments()
    {
        return $this->hasMany(ContestDepartments::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContestEntries()
    {
        return $this->hasMany(ContestEntries::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevApplications()
    {
        return $this->hasMany(DevApplications::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevCustomers()
    {
        return $this->hasMany(DevCustomers::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItHelpdesks()
    {
        return $this->hasMany(ItHelpdesk::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItHelpdesks0()
    {
        return $this->hasMany(ItHelpdesk::className(), ['itUserId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotes()
    {
        return $this->hasMany(Notes::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservations::className(), ['userId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfiles()
    {
        return $this->hasMany(UserProfiles::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['id' => 'profile_id'])->viaTable('user_profiles', ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsersRolesTransakcjes()
    {
        return $this->hasMany(UsersRolesTransakcje::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasMany(Roles::className(), ['id' => 'role_id'])->viaTable('users_roles_transakcje', ['user_id' => 'id']);
    }
}
