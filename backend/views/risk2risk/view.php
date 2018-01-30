<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risk */

$this->title = $model->namerisk;
$this->params['breadcrumbs'][] = ['label' => 'เพิ่ม/แก้ไข/ลบ รายละเอียดรูปแบบเหตุการณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2risk-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id',
            'coderisk',
            'namerisk:ntext',
            //'codegroup',
            [
              'attribute' => 'codegroup',
              'value' => function($model){return $model->r2group->namegroup;},
              'filter' => \yii\helpers\ArrayHelper::map(backend\models\Risk2group::find()->all(), 'codegroup', 'namegroup'), 
            ],          
        ],
    ]) ?>

</div>
