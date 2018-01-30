<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Risk2riskreportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Risk2risks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2risk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Risk2risk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'coderisk',
            'namerisk:ntext',
            //'codegroup',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
