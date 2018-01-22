<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blog`.
 */
class m180116_150424_create_blog_table extends Migration
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

        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'title' => $this->string(150),
            'text' => $this->text(),
            'url' => $this->string(),
            'picture' => $this->string(150),
            'status_id' => $this->smallInteger(1),
            'sort' => $this->smallInteger(1),
            'date_create' => $this->integer(),
            'date_update' => $this->integer(),
        ], $tableOptions);

        $this->createIndex(
            'idx-blog-user_id',
            'blog',
            'user_id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('blog');
    }
}
