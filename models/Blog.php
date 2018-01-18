<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $text
 * @property string $url
 * @property int $status_id
 * @property int $sort
 * @property int $date_create
 * @property int $date_update
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status_id', 'sort', 'date_create', 'date_update'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'title' => Yii::t('app', 'Title'),
            'text' => Yii::t('app', 'Text'),
            'url' => Yii::t('app', 'Url'),
            'status_id' => Yii::t('app', 'Status ID'),
            'sort' => Yii::t('app', 'Sort'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_update' => Yii::t('app', 'Date Update'),
        ];
    }
}
