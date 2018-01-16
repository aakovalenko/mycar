<?php

use yii\db\Migration;

/**
 * Handles the creation of table `iron_horse`.
 */
class m180116_093703_create_iron_horse_table extends Migration
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

        $this->createTable('iron_horse', [
            'id' => $this->primaryKey(11),
            'user_id' => $this->integer(11) ,
            'brand' => $this-> string(100),
                'model' => $this-> string(100),
        'year' => $this->integer(4) ,
        'engine' => $this->integer(4) ,
        'equipment' =>$this->string(10) ,
        'mileage' => $this->integer(11) ,
        'color' => $this-> string(11),
        'create_at' => $this-> integer(11),
        'update_at' => $this-> integer(11),
        'image' => $this-> string(255),

        ], $tableOptions);

        $this->createIndex(
            'idx-iron_horse-user_id',
            'iron_horse',
            'user_id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('iron_horse');
    }
}
