<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonsterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Iron Horses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iron-horse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Iron Horse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                    'attribute' => 'user_id',
                'value' => 'user.username',
                    ],

            'brand',
            'model',
            'year',
            //'engine',
            //'equipment',
            //'mileage',
            //'color',
            //'create_at',
            //'update_at',
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
