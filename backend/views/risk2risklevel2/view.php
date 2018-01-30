<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risklevel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ ระดับความรุนแรงทั่วไป', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2risklevel-view">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'code',
            'name',
            //'grouplevel',
        ],
    ]) ?>

</div>
