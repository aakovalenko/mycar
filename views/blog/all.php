<?php

/* @var $this yii\web\View */
/* @var $blogs app\models\Blog */
/* @var $dataProvider \yii\data\ActiveDataProvider */

//$blogs = $dataProvider->getModels();
?>
 <div class="body-content">

       <?= \yii\widgets\ListView::widget([
           'dataProvider' => $dataProvider,
           'itemView' => '_one', //show how to render one page

]);
?>
    </div>