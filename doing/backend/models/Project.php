<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $project_code
 * @property string $project_name
 * @property string $project_list
 * @property string $project_file
 * @property string $project_doc
 * @property string $project_datetime
 * @property integer $project_member
 * @property integer $project_rule
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_code', 'project_name', 'project_member', 'project_rule'], 'required'],
            [['project_list'], 'string'],
            [['project_datetime'], 'safe'],
            [['project_member', 'project_rule'], 'integer'],
            [['project_code'], 'string', 'max' => 12],
            [['project_name'], 'string', 'max' => 100],
            [['project_file', 'project_doc'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสข้อมูล',
            'project_code' => 'รหัสโครงการ',
            'project_name' => 'ชื่อโครงการ',
            'project_list' => 'รายละเอียดโครงการ',
            'project_file' => 'เอกสารที่เกี่ยวข้อง',
            'project_doc' => 'เอกสารที่เกี่ยวข้อง/ตารางเวลา',
            'project_datetime' => 'วัน เวลา บันทึกโครงการ',
            'project_member' => 'ผู้บันทึกโครงการ',
            'project_rule' => 'ผุ้รับผิดชอบโครงการ',
        ];
    }
}
