<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Risk2group */

$this->title = 'เพิ่มชื่อความรุนแรงทางคลินิก';
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบเหตุการณ์ที่เกิดขึ้น', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2group-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
