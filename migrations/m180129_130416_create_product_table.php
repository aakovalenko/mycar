<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180129_130416_create_product_table extends Migration
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

        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'sklad_id' => $this->integer(11),
            'title' => $this->string(50),
            'cost' => $this->integer()->null(),
            'type_id' => $this->integer(),
            'text' => $this->text()->null(),
            'date' => $this->string()
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
