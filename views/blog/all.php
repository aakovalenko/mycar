<?php

/* @var $this yii\web\View */
/* @var $blogs app\models\Blog */
?>
 <div class="body-content">

        <div class="row">
          <?php foreach ($blogs as $one): ?>
            <div class="col-lg-12">
                <h2><?=$one->title ?></h2>

                <p><?=$one->text?></p>
                <?= \yii\helpers\Html::a('Learn More',['blog/one','url'=>$one->url])?>
            </div>
        <?php endforeach;?>

        </div>

    </div>