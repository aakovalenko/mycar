<?php

use yii\db\Migration;

/**
 * Handles the creation of table `fueling`.
 */
class m180116_123111_create_fueling_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('fueling', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('fueling');
    }
}
