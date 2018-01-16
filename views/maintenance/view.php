<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Maintenance */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maintenances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maintenance-view">

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
            'id',
            'iron_horse_id',
            'mileage',
            'oil',
            'gearbox_oil',
            'hydraulic_oil',
            'oil_filter',
            'air_filter',
            'brake_fluid',
            'coolant',
            'bulbs',
            'brake_pads',
            'brake_discs',
            'generator_belt',
            'camshaft_bel',
            'wheel_rotation',
            'tire_pressure',
            'alignment',
            'battery',
            'spark_plug',
            'spark_plug_wire',
            'date',
            'additional_info',
        ],
    ]) ?>

</div>
