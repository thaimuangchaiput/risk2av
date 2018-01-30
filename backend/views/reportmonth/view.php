<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Risk2datarisks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2datarisk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'hnno',
            'name',
            'age',
            'gender',
            'departreport:ntext',
            'departrespon:ntext',
            'daterigter',
            'timer',
            'fromevent:ntext',
            'dtevt:ntext',
            'commen:ntext',
            'typereport:ntext',
            'notepatient:ntext',
            'notehead:ntext',
            'noteceo:ntext',
            'notedepart:ntext',
            'star',
            'statusconfirm',
            'datereport',
            'daterespon',
        ],
    ]) ?>

</div>
