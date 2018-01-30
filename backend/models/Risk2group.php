<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "risk2_group".
 *
 * @property integer $id
 * @property integer $codegroup
 * @property string $namegroup
 */
class Risk2group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risk2_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codegroup','namegroup'], 'required'],//ตรวจสอบว่าต้องไม่เป็นค่าว่าง
            [['codegroup'], 'integer'],
            [['namegroup'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codegroup' => 'หัวข้อ',
            'namegroup' => 'ชื่อความรุนแรงทางคลินิก',
        ];
    }
        public function getR2risk()
    {
        return $this->hasMany(Risk2risk::className(), ['codegroup' => 'codegroup']);
    }
        public function getR2datarisk()
    {
        return $this->hasMany(Risk2datarisk::className(), ['fromevent' => 'codegroup']);
    }    
}
