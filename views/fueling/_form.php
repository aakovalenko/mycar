<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\IronHorse;



/* @var $this yii\web\View */
/* @var $model app\models\Fueling */
/* @var $form yii\widgets\ActiveForm */

/*
* Getting last mileage for select car
*/
$url = \yii\helpers\Url::to(['/fueling/last-mileage']);
$js = <<<JS
$('#fueling-iron_horse_id').on('change', function(){
     var id = $(this).val();
     if(id){
         $.get('$url' + '?id=' + id, function(data){
             if(data && data.mileage){
                 $('#fueling-mileage').val(data.mileage);
             }
             else{
                  $('#fueling-mileage').val('');
             }
         });   
     }
     else{
        $('#fueling-mileage').val('');
     }
});
JS;

$this->registerJs($js);;



$listData = [
    'petrol' => ['a80'=>'a80','a92'=>'a92','a95'=>'a95','a98'=>'a98'],
    'gas' => ['propane'=>'propane','methane'=>'methane'],
    'diesel oil'=> ['diesel'=>'diesel','winter diesel'=>'winter diesel','arctic diesel'=>'arctic diesel']
];
/*
 * Get Last Mileage in BD
 */
/*if ($model->isNewRecord)
{
    $model->mileage = \app\models\Fueling::find()
        ->orderBy(['id' => SORT_DESC])->limit(1)->one()->mileage;
}*/

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

    <?= $form->field($model, 'fuel_type')->dropDownList($listData, ['prompt'=>'Choose fuel type']) ?>

    <?= $form->field($model, 'price_per_liter')->textInput() ?>

    <?= $form->field($model, 'liters')->textInput() ?>

    <?= $form->field($model, 'mileage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
