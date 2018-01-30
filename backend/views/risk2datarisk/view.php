<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Departreport;
use backend\models\Risk2risklevel;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ค้นหา/แก้ไข ข้อมูลอุบัติการณ์ความเสี่ยง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2datarisk-view">

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
            //'id',
            'hnno',
            'name',
            //'age',
            //'gender',
            //'departreport:ntext',
            [
              'attribute' => 'departreport',
              'value' => function($model){
                //return $model->r2datarisk->DeptName;
                $departreport = Departreport::findOne($model->departreport);
                //$dpr="คุณ ".$departreport->DeptName.""; 
                return $model=$departreport->DeptName;
               // return $model=isset($model->r2datarisk->DeptName) ? $model->r2datarisk->DeptName : '?';//ถ้า query มีค่าว่างต้องเช็คก่อน Trying to get property of non-object
              },
              //'filter' => \yii\helpers\ArrayHelper::map(backend\models\Departreport::find()->all(), 'ID', 'DeptName'), 
            ],             
           // 'departrespon:ntext',
            [
              'attribute' => 'departrespon',
              'value' => function($model){
                $departrespon = Departreport::findOne($model->departrespon);
                return $model=$departrespon->DeptName;               
              },               
            ],                        
            'daterigter',
            'timer',
            //'fromevent:ntext',
            [
              'attribute' => 'fromevent',
              'value' => function($model){return $model->r2group->namegroup;},
              'filter' => \yii\helpers\ArrayHelper::map(backend\models\Risk2group::find()->all(), 'codegroup', 'namegroup'), 
            ],              
            //'dtevt:ntext',
            [
              'attribute' => 'dtevt',
              'value' => function($model){
                  //return $model->r2rrdev->namerisk;
                  return $model=isset($model->r2rrdev->namerisk) ? $model->r2rrdev->namerisk : $model->dtevt.$model->dtevt_other;//ถ้า query มีค่าว่างต้องเช็คก่อน Trying to get property of non-object
                  
              },
              'filter' => \yii\helpers\ArrayHelper::map(backend\models\Risk2risk::find()->all(), 'id', 'namerisk'), 
            ],                       
            //'dtevt_other:ntext',            
            //'commen:ntext',
            [
              'attribute' => 'commen',
              'value' => function($model){
                $commen = Risk2risklevel::findOne([$model->commen,'grouplevel' => 1]);
                return $model=$commen->name;               
              },               
            ],                      
            //'typereport:ntext',
            [
              'attribute' => 'typereport',
              'value' => function($model){
                $typereport = Risk2risklevel::findOne([$model->typereport,'grouplevel' => 2]);
                return $model=$typereport->name;               
              },               
            ],                        
            'notepatient:text',
            'notehead:ntext',
            'noteceo:ntext',
            'notedepart:ntext',
            //'star',
            //'statusconfirm',
            'datereport:date:วันที่รายงาน',
            'daterespon:date:วันที่ตอบ',                   
  
        ],
    ]) ?>

</div>
