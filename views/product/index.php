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
// Получаем id записей

    $('.grid-view tbody tr').on('click', function(){
        var data = $(this).attr('data-key');
        $('#modal-info').modal('show');
        $('#modal-info').find('.modal-title').text('id:' + data);
        $('#modal-info').find('.modal-body').load('/product/update?id='+data);
      // console.log(data); 
    })
    
    
    //AJAX
    
    function newAjax() //This is our shortcut Ajax request function
    {
        var ajax;
        if (window.XMLHttpRequest) {
            ajax = new XMLHttpRequest();
            } else {
                ajax = new ActiveXObject('Microsoft.XMLHTTP');
                }
                return ajax;
    }
    
    function LoadMe()
    {
        var ajaxHandler = newAjax();
        ajaxHandler.onreadystatechange = function() {
            if (ajaxHandler.readyState == 4 && ajaxHandler.status == 200) {
            document.getElementById('loadMe').innerHTML = ajaxHandler.responseText;
            }
            }
            ajaxHandler.open('GET', 'mypage.html', true);
            ajaxHandler.send();
            }
");
?>

<?php Pjax::begin() ?>
<a href="/product/button" class="btn btn-primary">>>>HERE!>>></a>
<div id="loadMe">&nbsp</div>
<button onclick="LoadMe()">Ajax my page</button>
<?php Pjax::end();?>


