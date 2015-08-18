<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $role
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'auth_key', 'password_hash', 'email', 'role', 'status'], 'required'],
            [['role', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['first_name', 'last_name'], 'string', 'max' => 100],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสข้อมูล',
            'first_name' => 'ชื่อ',
            'last_name' => 'นาสกุล',
            'username' => 'ชื่อเข้าใช้งานระบบ',
            'auth_key' => 'คีย์',
            'password_hash' => 'รหัสผ่าน',
            'password_reset_token' => 'รหัสผ่านตรวจสอบ',
            'email' => 'อีเมล',
            'role' => 'สิทธ์เข้าใช้งาน',
            'status' => 'สถานะเข้าใช้งาน',
            'created_at' => 'วันที่บันทึกข้อมูล',
            'updated_at' => 'วันที่แก้ไขข้อมูล',
        ];
    }
}
