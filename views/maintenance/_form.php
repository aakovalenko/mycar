<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Maintenance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maintenance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iron_horse_id')->textInput() ?>

    <?= $form->field($model, 'mileage')->textInput() ?>

    <?= $form->field($model, 'oil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gearbox_oil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hydraulic_oil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oil_filter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'air_filter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brake_fluid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coolant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulbs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brake_pads')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brake_discs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'generator_belt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'camshaft_bel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wheel_rotation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tire_pressure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alignment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'battery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spark_plug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spark_plug_wire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'additional_info')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
