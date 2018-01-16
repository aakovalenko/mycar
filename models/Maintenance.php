<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maintenance".
 *
 * @property int $id
 * @property int $iron_horse_id
 * @property int $mileage
 * @property string $oil
 * @property string $gearbox_oil
 * @property string $hydraulic_oil
 * @property string $oil_filter
 * @property string $air_filter
 * @property string $brake_fluid
 * @property string $coolant
 * @property string $bulbs
 * @property string $brake_pads
 * @property string $brake_discs
 * @property string $generator_belt
 * @property string $camshaft_bel
 * @property string $wheel_rotation
 * @property string $tire_pressure
 * @property string $alignment
 * @property string $battery
 * @property string $spark_plug
 * @property string $spark_plug_wire
 * @property string $date
 * @property string $additional_info
 */
class Maintenance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'maintenance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iron_horse_id', 'mileage'], 'integer'],
            [['date'], 'safe'],
            [['oil', 'gearbox_oil', 'hydraulic_oil', 'oil_filter', 'air_filter', 'brake_fluid', 'coolant', 'bulbs', 'brake_pads', 'brake_discs', 'generator_belt', 'camshaft_bel', 'wheel_rotation', 'tire_pressure', 'alignment', 'battery', 'spark_plug', 'spark_plug_wire', 'additional_info'], 'string', 'max' => 50],
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
            'mileage' => Yii::t('app', 'Mileage'),
            'oil' => Yii::t('app', 'Oil'),
            'gearbox_oil' => Yii::t('app', 'Gearbox Oil'),
            'hydraulic_oil' => Yii::t('app', 'Hydraulic Oil'),
            'oil_filter' => Yii::t('app', 'Oil Filter'),
            'air_filter' => Yii::t('app', 'Air Filter'),
            'brake_fluid' => Yii::t('app', 'Brake Fluid'),
            'coolant' => Yii::t('app', 'Coolant'),
            'bulbs' => Yii::t('app', 'Bulbs'),
            'brake_pads' => Yii::t('app', 'Brake Pads'),
            'brake_discs' => Yii::t('app', 'Brake Discs'),
            'generator_belt' => Yii::t('app', 'Generator Belt'),
            'camshaft_bel' => Yii::t('app', 'Camshaft Bel'),
            'wheel_rotation' => Yii::t('app', 'Wheel Rotation'),
            'tire_pressure' => Yii::t('app', 'Tire Pressure'),
            'alignment' => Yii::t('app', 'Alignment'),
            'battery' => Yii::t('app', 'Battery'),
            'spark_plug' => Yii::t('app', 'Spark Plug'),
            'spark_plug_wire' => Yii::t('app', 'Spark Plug Wire'),
            'date' => Yii::t('app', 'Date'),
            'additional_info' => Yii::t('app', 'Additional Info'),
        ];
    }
}
