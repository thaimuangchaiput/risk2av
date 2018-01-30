<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risk */

$this->title = 'เพิ่มรายละเอียดรูปแบบเหตุการณ์';
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ รายละเอียดรูปแบบเหตุการณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2risk-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
