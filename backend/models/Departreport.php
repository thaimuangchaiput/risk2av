<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "risk2_departreport".
 *
 * @property integer $ID
 * @property string $DeptId
 * @property string $DeptName
 * @property string $gdeptid
 * @property string $username
 * @property string $passwords
 * @property string $status
 */
class Departreport extends \yii\db\ActiveRecord
{

    const us_narmal = 0;
    const us_admin = 9;

    public static function itemsAlias($key){

    $items = [
      'status'=>[
        self::us_narmal => 'ผู้ใช้งานทั่วไป',
        self::us_admin => 'ผู้ดูแลระบบ',
             ]
      ];
     return ArrayHelper::getValue($items,$key,[]);
      }
      
    public function getItemstatus()
    {
      return self::itemsAlias('status');
    }
    public function getstatusName(){
      return ArrayHelper::getValue($this->getItemstatus(),$this->status);
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risk2_departreport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DeptId','DeptName', 'username','passwords','status'], 'required'],//ตรวจสอบว่าต้องไม่เป็นค่าว่าง
            [['DeptId'], 'string', 'max' => 5 ],
            [['DeptName'], 'string', 'max' => 50],
            [['gdeptid'], 'string', 'max' => 2],
            [['username', 'passwords'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'DeptId' => 'รหัสหน่วยงาน',
            'DeptName' => 'ชื่อหน่วยงาน',
            'gdeptid' => 'Gdeptid',
            'username' => 'Username',
            'passwords' => 'Passwords',
            'status' => 'สถานะ',
            //เพิ่มเติม
            'statusName' => Yii::t('app', 'สถานะ'),
            'numev_rp' => 'จำนวนอุบัติการณ์ที่รายงาน',
            'numev_ep' => 'จำนนวนอุบัติการที่รับผิดชอบ',
            'date1' => '',
            'date2' => '',
        ];
    }
            public function getR2departreport()
    {
        return $this->hasMany(Risk2datarisk::className(), ['departreport' => 'ID']);
    }

}
