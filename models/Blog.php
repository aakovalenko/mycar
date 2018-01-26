<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

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

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_create'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date_update'],
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
            [['user_id', 'status_id', 'sort', 'date_create', 'date_update'], 'integer'],
            [['text','title','picture'], 'string'],
            [['url'],'unique'],
            [['sort'],'integer', 'max' => 99, 'min' => 1],
            [['url'], 'string', 'max' => 255],
            [['picture'],'image', 'extensions' => 'jpg,jpeg,png,gif']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User'),
            'title' => Yii::t('app', 'Title'),
            'text' => Yii::t('app', 'Text'),
            'url' => Yii::t('app', 'Url'),
            'picture' => Yii::t('app', 'Picture'),
            'status_id' => Yii::t('app', 'Status'),
            'sort' => Yii::t('app', 'Sort'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_update' => Yii::t('app', 'Date Update'),
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(),['id' => 'user_id']);
    }

    public function upload($model)
    {
        if ($this->validate()) {
            if ($model->picture = UploadedFile::getInstance($model, 'picture')) {
                /*if($model->picture){
                    @unlink($model->picture);
                }*/
                $imageName = 'uploads/' . $model->title . date('now') . $model->picture->extension;
                $model->picture->saveAs($imageName);
                $model->picture = $imageName;
                $model->save(false);
            }
        }

    }
    public function getPicture()
    {
        return $this->picture ? '/'. $this->picture : false ;
    }

    public function getAuthor()
    {
        return $this->hasOne(User::className(),['id' => 'user_id']);
    }

    public function getBlogTag()
    {
        return $this->hasMany(Blogtag::className(),['blog_id' => 'id']);
    }

    public function getTags()
    {
        return $this->hasMany(Tag::className(),['id' => 'tag_id'])->via('blogTag');
    }




}
