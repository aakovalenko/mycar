<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IronHorse */

$this->title = 'Create Iron Horse';
$this->params['breadcrumbs'][] = ['label' => 'Iron Horses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iron-horse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
