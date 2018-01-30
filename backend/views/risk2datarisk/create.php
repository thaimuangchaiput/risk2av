<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */

$this->title = 'บันทึกใบรายงานอุบัติการณ์ความเสี่ยง';
$this->params['breadcrumbs'][] = ['label' => 'ค้นหา/แก้ไข ข้อมูลอุบัติการณ์ความเสี่ยง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2datarisk-create">

    <h1><?php Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dtevt' => [],
    ]) ?>

</div>
