<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 25.01.18
 * Time: 16:27
 */
?>

    <div class="col-lg-12">
        <h3><?=$model->title ?></h3>

        <p><?=$model->text?></p>
        <?= \yii\helpers\Html::a('Learn More',['blog/one','url'=>$model->url],['class'=>'btn btn-success'])?>
    </div>

