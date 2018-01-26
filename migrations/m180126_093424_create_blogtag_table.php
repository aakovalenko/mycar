<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blogtag`.
 */
class m180126_093424_create_blogtag_table extends Migration
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

        $this->createTable('blogtag', [
            'id' => $this->primaryKey(),
            'blog_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ],$tableOptions);

        $this->createIndex(
            'idx-blogtag-blog_id',
            'blogtag',
            'blog_id'
        );

        $this->createIndex(
            'idx-blogtag-tag_id',
            'blogtag',
            'tag_id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('blogtag');
    }
}
