<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */

$this->title = 'แก้ไขใบรายงานอุบัติการณ์ความเสี่ยง' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ค้นหา/แก้ไข ข้อมูลอุบัติการณ์ความเสี่ยง', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="risk2datarisk-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?php
   // print_r($model);
   // echo "<br>";
   // print_r($dtevt);
    echo $this->render('_form', [
        'model' => $model,
        'dtevt' => $dtevt,
    ]) ?>

</div>
