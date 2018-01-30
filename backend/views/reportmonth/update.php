<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */

$this->title = 'Update Risk2datarisk: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Risk2datarisks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="risk2datarisk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
