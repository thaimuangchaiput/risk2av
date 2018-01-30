<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risk */

$this->title = 'แก้ไขรายละเอียดรูปแบบเหตุการณ์: ' . $model->namerisk;
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ รายละเอียดรูปแบบเหตุการณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->namerisk, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="risk2risk-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
