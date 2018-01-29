<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $sklad_id
 * @property string $title
 * @property int $cost
 * @property int $type_id
 * @property string $text
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sklad_id', 'cost', 'type_id'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sklad_id' => Yii::t('app', 'Sklad ID'),
            'title' => Yii::t('app', 'Title'),
            'cost' => Yii::t('app', 'Cost'),
            'type_id' => Yii::t('app', 'Type ID'),
            'text' => Yii::t('app', 'Text'),
        ];
    }

    public static function getTypeList()
    {
        return [
          'first','second','third'
        ];
    }
}
