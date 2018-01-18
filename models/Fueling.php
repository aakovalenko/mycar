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
            [['iron_horse_id', 'user_id', 'fuel_type', 'mileage'], 'integer'],
            [['gas_station'],'string'],
            [['price_per_liter', 'liters'], 'number'],
            [['date'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'iron_horse_id' => Yii::t('app', 'Iron Horse'),
            'user_id' => Yii::t('app', 'User'),
            'date' => Yii::t('app', 'Date'),
            'gas_station' => Yii::t('app', 'Gas Station'),
            'fuel_type' => Yii::t('app', 'Fuel Type'),
            'price_per_liter' => Yii::t('app', 'Price Per Liter'),
            'liters' => Yii::t('app', 'Liters'),
            'mileage' => Yii::t('app', 'Mileage'),
        ];
    }

    public function getIronHorse()
    {
        return $this->hasMany(IronHorse::className(), ['id' => 'iron_horse_id']);
    }

    public function getHorse()
    {
        return $this->hasOne(IronHorse::className(), ['id' => 'iron_horse_id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


}
