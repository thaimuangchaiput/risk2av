<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risklevel */

$this->title = 'เพิ่มระดับความรุนแรงทั่วไป';
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ ระดับความรุนแรงทั่วไป', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2risklevel-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
