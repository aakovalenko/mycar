<?php

use yii\db\Migration;

/**
 * Handles the creation of table `maintenance`.
 */
class m180116_121447_create_maintenance_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('maintenance', [
            'id' => $this->primaryKey(11),
            'iron_horse_id' => $this->integer(11),
            'mileage' => $this->integer(11),
            'oil' => $this->string(50),
            'gearbox_oil' => $this->string(50),
            'hydraulic_oil' => $this->string(50),
            'oil_filter' => $this->string(50),
            'air_filter' => $this->string(50),
            'brake_fluid' => $this->string(50),
            'coolant' => $this->string(50),
            'bulbs' => $this->string(50),
            'brake_pads' => $this->string(50),
            'brake_discs' => $this->string(50),
            'generator_belt' => $this->string(50),
            'camshaft_bel' => $this->string(50),
            'wheel_rotation' => $this->string(50),
            'tire_pressure' => $this->string(50),
            'alignment' => $this->string(50),
            'battery' => $this->string(50),
            'spark_plug' => $this->string(50),
            'spark_plug_wire' => $this->string(50),
            'date' => $this->date(),
            'additional_info' => $this->string(50),

        ],$tableOptions);

        $this->createIndex(
            'idx-maintenance-iron_horse_id',
            'maintenance',
            'iron_horse_id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('maintenance');
    }
}
