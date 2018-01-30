<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Risk2groupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รูปแบบเหตุการณ์ที่เกิดขึ้น';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2group-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มชื่อความรุนแรงทางคลินิก', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'codegroup',
            'namegroup',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
