<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "risk2_datarisk".
 *
 * @property integer $id
 * @property string $hnno
 * @property string $name
 * @property string $age
 * @property string $gender
 * @property string $departreport
 * @property string $departrespon
 * @property string $daterigter
 * @property string $timer
 * @property string $fromevent
 * @property string $dtevt
 * @property string $commen
 * @property string $typereport
 * @property string $notepatient
 * @property string $notehead
 * @property string $noteceo
 * @property string $notedepart
 * @property string $star
 * @property string $statusconfirm
 * @property string $datereport
 * @property string $daterespon
 */
class Risk2datarisk extends \yii\db\ActiveRecord
{
    
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'risk2_datarisk';
    }

    /**
     * @inheritdoc
     */
        public static function itemsAlias($key){

    $items = [
      'dtevt'=>[
        self::us_narmal => 'ผู้ใช้งานทั่วไป',
        self::us_admin => 'ผู้ดูแลระบบ',
             ]
      ];
     return ArrayHelper::getValue($items,$key,[]);
      }
      
    public function getItemdtevt()
    {
      return self::itemsAlias('dtevt');
    }
    public function rules()
    {
        return [
            [['departreport', 'departrespon', 'fromevent', 'commen', 'typereport', 'notepatient','daterigter'], 'required'],
            [['notepatient', 'notehead', 'noteceo', 'notedepart'], 'string'],
            [['dtevt','dtevt_other','dtevt1','dtevt2','datereport', 'daterespon'], 'safe'],
            [['hnno'], 'string', 'max' => 10],
            [['name', 'star'], 'string', 'max' => 100],
            [['age'], 'string', 'max' => 3],
            [['gender'], 'string', 'max' => 5],
            [['timer'], 'string', 'max' => 15],
            [['statusconfirm'], 'string', 'max' => 2],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hnno' => 'หมายเลข HN',
            'name' => 'ชื่อ-นามสกุล',
            'age' => 'Age',
            'gender' => 'Gender',
            'departreport' => 'หน่วยงานที่รายงาน',
            'departrespon' => 'หน่วยงานที่รับผิดชอบ',
            'daterigter' => 'วันที่เกิดเหตุการณ์',
            'timer' => 'เวลา',
            'fromevent' => 'หัวข้อเหตุการณ์ที่เกิด',
            'dtevt' => 'เหตุการณ์ที่เกิด',
            'dtevt_other' => '',
            'commen' => 'ระดับความรุนแรงทางคลินิก',
            'typereport' => 'ระดับความรุนแรงทั่วไป',
            'notepatient' => 'บรรยายสรุปเหตุการณ์ที่เกิด',
            'notehead' => 'ความเห็น หัวหน้างาน/ฝ่าย',
            'noteceo' => 'วิเคราะห์สาเหตุและแนวทางแก้ไข',
            'notedepart' => 'หมายเหตุ',
            'star' => 'Star',
            'statusconfirm' => 'Statusconfirm',
            'datereport' => '',
            'daterespon' => '',
            'date1' => '',
            'date2' => '',
            
        ];
    }
    public function getR2datarisk()
    {
        return $this->hasOne(Departreport::className(), ['ID' => 'departreport']);
    }
    public function getR2group()
    {
        return $this->hasOne(Risk2group::className(), ['codegroup' => 'fromevent']);
    }    
    public function getR2rrdev()
    {
        return $this->hasOne(Risk2risk::className(), ['id' => 'dtevt']);
    }        
}
