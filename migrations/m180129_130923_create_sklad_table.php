<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sklad`.
 */
class m180129_130923_create_sklad_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOption = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('sklad', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50),
            'address' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sklad');
    }
}
