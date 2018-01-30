<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Sklad;
use app\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
               'attribute' => 'sklad_id',
                'value' => 'skladName',

                'filter' => Sklad::getList(),
            ],

            'title',
            'cost',
             [
               'attribute' => 'type_id',
                'value' => 'typeName',
                'filter' => Product::getTypeList(),
            ],
            //'text:ntext',
            [
                    'attribute' => 'date', 'format' => 'date', 'value' => 'date',
                     'filter' => \kartik\datecontrol\DateControl::widget([
                             'model' => $searchModel,
                             'attribute' => 'date',
                             'saveFormat' => 'php:U'

                     ])
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
<?php
$this->registerJs("
    $('.grid-view tbody tr').on('click', function(){
        var data = $(this).data();
       console.log(data); 
    })
");
