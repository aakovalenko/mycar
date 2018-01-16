<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fueling".
 *
 * @property int $id
 * @property int $iron_horse_id
 * @property int $date
 * @property int $fuel_type
 * @property double $price_per_liter
 * @property double $liters
 * @property int $mileage
 */
class Fueling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fueling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iron_horse_id', 'date', 'fuel_type', 'mileage'], 'integer'],
            [['price_per_liter', 'liters'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'iron_horse_id' => Yii::t('app', 'Iron Horse ID'),
            'date' => Yii::t('app', 'Date'),
            'fuel_type' => Yii::t('app', 'Fuel Type'),
            'price_per_liter' => Yii::t('app', 'Price Per Liter'),
            'liters' => Yii::t('app', 'Liters'),
            'mileage' => Yii::t('app', 'Mileage'),
        ];
    }
}
