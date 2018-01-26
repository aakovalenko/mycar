<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogtag".
 *
 * @property int $id
 * @property int $blog_id
 * @property int $tag_id
 */
class Blogtag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogtag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'blog_id' => Yii::t('app', 'Blog ID'),
            'tag_id' => Yii::t('app', 'Tag ID'),
        ];
    }

    public function getTags()
    {
        return $this->hasOne(Tag::className(),['id' => 'tag_id']);
    }
}
