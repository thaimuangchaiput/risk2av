<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Risk2riskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เพิ่ม/แก้ไข/ลบ รายละเอียดรูปแบบเหตุการณ์';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2risk-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มรายละเอียดรูปแบบเหตุการณ์', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'coderisk',
            'namerisk:ntext',
            //'codegroup',
            [
              'attribute' => 'codegroup',
              'value' => function($model){return $model->r2group->namegroup;},
              'filter' => \yii\helpers\ArrayHelper::map(backend\models\Risk2group::find()->all(), 'codegroup', 'namegroup'), 
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
