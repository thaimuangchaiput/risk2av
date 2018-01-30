<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%education}}".
 *
 * @property integer $id
 * @property string $name
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%education}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'name' => Yii::t('backend', 'Name'),
        ];
    }

    /**
     * @inheritdoc
     * @return EducationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EducationQuery(get_called_class());
    }
}
