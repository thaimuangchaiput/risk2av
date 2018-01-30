<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Departreport */

$this->title = 'เพิ่มหน่วยงาน';
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ หน่วยงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departreport-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
