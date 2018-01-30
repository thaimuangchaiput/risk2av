<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Departreport;

/* @var $this yii\web\View */
/* @var $model backend\models\Departreport */

$this->title = $model->DeptName;
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ หน่วยงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departreport-view">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->ID], [
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
            'ID',
            'DeptId',
            'DeptName',
            'gdeptid',
            'username',
            'passwords',
            //'status',
            [
              'attribute'=>'status',
              'filter'=>Departreport::itemsAlias('status'),
              'value'=>function($model){
                return $model->statusName;
              }
            ], 
            
        ],
    ]) ?>

</div>
