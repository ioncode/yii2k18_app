<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "airport_name".
 *
 * @property int $id
 * @property int $airport_id
 * @property int $language_id
 * @property string $value
 */
class Airport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'airport_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['airport_id', 'value'], 'required'],
            [['airport_id', 'language_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['airport_id', 'language_id'], 'unique', 'targetAttribute' => ['airport_id', 'language_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'airport_id' => 'Airport ID',
            'language_id' => 'Language ID',
            'value' => 'Value',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AirportQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AirportQuery(get_called_class());
    }
}
