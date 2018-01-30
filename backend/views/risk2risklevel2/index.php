<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Risk2risklevelSearch2 */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เพิ่ม/แก้ไข/ลบ ระดับความรุนแรงทั่วไป';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2risklevel-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มระดับความรุนแรงทั่วไป', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'code',
            'name',
            //'grouplevel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
