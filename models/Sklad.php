<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sklad".
 *
 * @property int $id
 * @property string $title
 * @property string $address
 */
class Sklad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sklad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'address' => Yii::t('app', 'Address'),
        ];
    }
}
