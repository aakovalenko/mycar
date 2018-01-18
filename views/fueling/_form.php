<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\IronHorse;


/* @var $this yii\web\View */
/* @var $model app\models\Fueling */
/* @var $form yii\widgets\ActiveForm */
if ($model->isNewRecord)
{
    $model->mileage = \app\models\Fueling::find()->orderBy(['id' => SORT_DESC])->limit(1)->one()->mileage;
}
?>


<div class="fueling-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->widget(DatePicker::className(),[

        'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
        ]
    ]) ?>

    <?= $form->field($model, 'iron_horse_id')->dropDownList(
            ArrayHelper::map(IronHorse::find()->all(),'id','brandModel'),['prompt' => 'Select your Car: ']) ?>

    <?= $form->field($model, 'gas_station')->textInput() ?>

    <?= $form->field($model, 'fuel_type')->textInput() ?>

    <?= $form->field($model, 'price_per_liter')->textInput() ?>

    <?= $form->field($model, 'liters')->textInput() ?>

    <?= $form->field($model, 'mileage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
