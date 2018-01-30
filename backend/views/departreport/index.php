<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Departreport;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartreportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
//print_r($searchModel);
echo "<br/>";
$this->title = 'เพิ่ม/แก้ไข/ลบ หน่วยงาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departreport-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มหน่วยงาน', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'DeptId',
            'DeptName',
            //'gdeptid',
            'username',
            'passwords',
            //'status',
           /* [                
            'attribute'=>'status',
            'filter'=>['0'=>'ผู้ใช้งานทั่วไป','9'=>'ผู้ดูแลระบบ'],
            ],*/
           // 'statusName',
            [
              'attribute'=>'status',
              'filter'=>Departreport::itemsAlias('status'),
              'value'=>function($model){
                return $model->statusName;
              }
            ],            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
