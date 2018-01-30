<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use backend\models\Departreport;
use backend\models\Risk2datarisk;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartreportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
//print_r($searchModel);
echo "<br/>";
$this->title = 'ข้อมูลหน่วยงานที่รายงานความเสี่ยง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departreport-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('เพิ่มหน่วยงาน', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
            'panel'=>[
            'before'=> ''
            ],        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            //'DeptId',
            'DeptName',
            [
              'attribute' => 'numev_rp',
              'value' => function($model){
                //$departrespon = Departreport::findOne($model->departrespon);
                $count = Risk2datarisk::find()
                ->where(['departreport' => $model->ID])
                ->count();
                return $count;               
              },               
            ], 
            [
              'attribute' => 'numev_ep',
              'value' => function($model){
                //$departrespon = Departreport::findOne($model->departrespon);
                $count = Risk2datarisk::find()
                ->where(['departrespon' => $model->ID])
                ->count();
                return $count;               
              },               
            ],                        
            //'gdeptid',
            //'username',
            //'passwords',
            //'status',
           /* [                
            'attribute'=>'status',
            'filter'=>['0'=>'ผู้ใช้งานทั่วไป','9'=>'ผู้ดูแลระบบ'],
            ],*/
           // 'statusName',
           /* [
              'attribute'=>'status',
              'filter'=>Departreport::itemsAlias('status'),
              'value'=>function($model){
                return $model->statusName;
              }
            ], */           
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
