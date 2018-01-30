<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "risk2_risk_level".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $grouplevel
 */
class Risk2risklevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risk2_risk_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code','name'], 'required'],//ตรวจสอบว่าต้องไม่เป็นค่าว่าง
            [['grouplevel'], 'integer'],
            [['code'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'รหัส',
            'name' => 'ชื่อความรุนแรง',
            'grouplevel' => '',
        ];
    }
}
