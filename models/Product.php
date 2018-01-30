<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

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

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],

                ],
                // если вместо метки времени UNIX используется datetime:
                // 'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sklad_id', 'cost', 'type_id','date'], 'integer'],
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
            'date' => Yii::t('app', 'Date')
        ];
    }

    public static function getTypeList()
    {
        return [
          'first','second','third'
        ];
    }

    public function getSklad()
    {
        return $this->hasOne(Sklad::className(),['id' => 'sklad_id']);
    }

    public function getSkladName()
    {
        return (isset($this->sklad))? $this->sklad->title: ' не задано';
    }

    public function getTypeName()
    {
        $list = $this->getTypeList();
        return $list[$this->type_id];
    }


}
