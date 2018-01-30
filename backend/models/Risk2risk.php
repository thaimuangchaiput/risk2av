<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "risk2_risk".
 *
 * @property integer $id
 * @property integer $coderisk
 * @property string $namerisk
 * @property string $codegroup
 */
class Risk2risk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'risk2_risk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coderisk','namerisk','codegroup'], 'required'],//ตรวจสอบว่าต้องไม่เป็นค่าว่าง
            [['coderisk'], 'integer'],
            [['namerisk'], 'string'],
            [['codegroup'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'coderisk' => 'รหัส',
            'namerisk' => 'ชื่อความรุนแรง',
            'codegroup' => 'กลุ่มความรุนแรง',
        ];
    }
        public function getR2group()
    {
        return $this->hasOne(Risk2group::className(), ['codegroup' => 'codegroup']);
    }
        public function getR2drdev()
    {
        return $this->hasMany(Risk2datarisk::className(), ['id' => 'dtevt']);
    }       
}
