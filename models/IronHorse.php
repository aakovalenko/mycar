<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "iron_horse".
 *
 * @property int $id
 * @property int $user_id
 * @property string $brand
 * @property string $model
 * @property int $year
 * @property int $engine
 * @property string $equipment
 * @property int $mileage
 * @property int $color
 * @property int $create_at
 * @property int $update_at
 * @property string $image
 */
class IronHorse extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iron_horse';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['update_at'],
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
            [['user_id', 'year', 'engine', 'mileage', 'create_at', 'update_at'], 'integer'],
            [['brand', 'model', 'color'], 'string', 'max' => 100],
            [['equipment'], 'string', 'max' => 10],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User',
            'brand' => 'Brand',
            'model' => 'Model',
            'year' => 'Year',
            'engine' => 'Engine',
            'equipment' => 'Equipment',
            'mileage' => 'Mileage',
            'color' => 'Color',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'image' => 'Image',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
