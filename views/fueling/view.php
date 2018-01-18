<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Fueling */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fuelings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fueling-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            [
                'attribute' => 'user_id',
                'value' => function ($e) {
                    return $e->user->username;
                },
            ],

            [
                    'attribute' => 'iron_horse_id',
                    'value' => function ($e) {
                        return $e->horse->brand.' '. $e->horse->model;
                    }
            ],
            'date',
            'gas_station',
            'fuel_type',
            'price_per_liter',
            'liters',
            'mileage',
        ],
    ]) ?>

</div>
