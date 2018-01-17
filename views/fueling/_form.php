<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Fueling */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fueling-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->widget(DatePicker::className(),[

        'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
        ]
    ]) ?>

    <?= $form->field($model, 'fuel_type')->textInput() ?>

    <?= $form->field($model, 'price_per_liter')->textInput() ?>

    <?= $form->field($model, 'liters')->textInput() ?>

    <?= $form->field($model, 'mileage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
