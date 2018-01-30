<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2group */

$this->title = 'แก้ไขชื่อความรุนแรงทางคลินิก: ' . $model->namegroup;
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบเหตุการณ์ที่เกิดขึ้น', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->namegroup, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="risk2group-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
