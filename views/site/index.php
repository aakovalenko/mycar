<?php

use yii\widgets\LinkPager;
use yii\helpers\StringHelper;
/* @var $this yii\web\View */

$this->title = 'MyCar';
?>
<div class="site-index">



    <div class="body-content">

        <div class="row">
          <?php foreach ($blogs as $one): ?>
            <div class="col-lg-4">
                <h2><?=$one->title ?></h2>

                <p><?=\yii\helpers\StringHelper::truncate($one->text,100)?></p>
                <?= \yii\helpers\Html::a('Learn More',['blog/one','url'=>$one->url],['class'=>'btn btn-success'])?>
            </div>
        <?php endforeach;?>

        </div>

    </div>
</div>
