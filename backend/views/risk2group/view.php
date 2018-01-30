<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2group */

$this->title = $model->namegroup;
$this->params['breadcrumbs'][] = ['label' => 'รูปแบบเหตุการณ์ที่เกิดขึ้น', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2group-view">

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
            'id',
            'codegroup',
            'namegroup:ntext',
        ],
    ]) ?>

</div>
