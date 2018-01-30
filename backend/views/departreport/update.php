<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Departreport */

$this->title = 'แก้ไขหน่วยงาน: ' . $model->DeptName;
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ หน่วยงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DeptName, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departreport-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
