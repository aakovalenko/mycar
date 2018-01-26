<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Blogs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Blog'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            [ 'attribute' => 'user_id',
                'value' => 'user.username' //value - то что выводить внутри ячейки
                ],

            'title',
            [
                'attribute' => 'text',
                'format' => 'raw',

            ],

            'url:url',
            [
                'attribute' => 'Picture',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img($model->getPicture(),['class' => 'img-responsive' ,'style' => 'max-width : 150px ']);
                }
            ],
            [
                    'attribute' => 'status_id',
                   'filter' => ['off','on'],
                    'value' => function ($model) {
        if ($model->status_id == 1) {
            $status = 'on';
        } else {
            $status = 'off';
        }
        return $status;
                    }
            ],
            //'status_id',
            //'sort',
            'date_create:date',
            //'date_update',

            [
                    'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {check}',
                'buttons' => [
                        'check'=> function ($url,$model, $key) {
                                return Html::a('<i class="fa fa-check" aria-hidden="true"></i>',$url);
                        }
                ]
            ],
        ],
    ]); ?>

</div>
