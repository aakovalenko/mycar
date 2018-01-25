<?php

use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'MyCar';
?>
<div class="site-index">



    <div class="body-content">

        <div class="row">
          <?php foreach ($blogs as $one): ?>
            <div class="col-lg-4">
                <h2><?=$one->title ?></h2>

                <p><?=$one->text?></p>
            </div>
        <?php endforeach;?>

        </div>

    </div>
</div>
