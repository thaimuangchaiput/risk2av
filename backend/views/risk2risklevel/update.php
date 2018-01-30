<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risklevel */

$this->title = 'แก้ไขระดับความรุนแรงทางคลินิก: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ ระดับความรุนแรงทางคลินิก', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="risk2risklevel-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
