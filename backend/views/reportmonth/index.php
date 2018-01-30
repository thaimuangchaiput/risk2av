<?php

use yii\helpers\Url;
use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use backend\models\Departreport;
use backend\models\Risk2risklevel;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReportmonthSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายงานอุบัติการณ์ความเสี่ยงประจำเดือน.....';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2datarisk-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Risk2datarisk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
            <?php
            /*
echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'daterigter',
            'hnno',
            'name',
             'fromevent:ntext',
             'dtevt:ntext',
          
        ],    
]);
echo " <=ส่งออกข้อมูลทั้งหมด ";
*/
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
            'panel'=>[
            'before'=> ''
            ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn',
             'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::to(['/reportmonth/view',  'id' => $key, 'scan' => $model->id]);
            },
            'buttons' => [
                'update' => function ($url, $model, $key) {
                    return '';
                },
                'delete' => function ($url, $model, $key) {
                    return '';
                },   
                ],
            ],
            //'id',
            'daterigter',
            'hnno',
            'name',             
            //'commen:ntext',
            [
              'attribute' => 'commen',
              'value' => function($model){
                $commen = Risk2risklevel::findOne($model->commen);
                //return $model=$commen->name; 
                return $model=isset($commen->name) ? $commen->name : '';//ถ้า query มีค่าว่างต้องเช็คก่อน
              },
               'filter' => \yii\helpers\ArrayHelper::map(Risk2risklevel::find()->where(['grouplevel'=>1])->orderBy('code')->all(), 'id', 'name'),         
            ],             
            //'typereport:ntext',
            [
              'attribute' => 'typereport',
              'value' => function($model){
                $typereport = Risk2risklevel::findOne($model->typereport);
                //return $model=$typereport->name;  
                return $model=isset($typereport->name) ? $typereport->name : '';//ถ้า query มีค่าว่างต้องเช็คก่อน
              },
               'filter' => \yii\helpers\ArrayHelper::map(Risk2risklevel::find()->where(['grouplevel'=>2])->orderBy('code')->all(), 'id', 'name'),         
            ],             
            //'age',
            //'gender',
            //'departreport:ntext',
            [
              'attribute' => 'departreport',
              'value' => function($model){
                $departrespon = Departreport::findOne($model->departreport);
                return $model=$departrespon->DeptName;               
              },
               'filter' => \yii\helpers\ArrayHelper::map(Departreport::find()->all(), 'ID', 'DeptName'),         
            ],            
             //'departrespon:ntext',
            [
              'attribute' => 'departrespon',
              'value' => function($model){
                $departrespon = Departreport::findOne($model->departrespon);
                return $model=$departrespon->DeptName;               
              }, 
               'filter' => \yii\helpers\ArrayHelper::map(Departreport::find()->all(), 'ID', 'DeptName'),        
            ], 
                      
            // 'timer',
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
                  return $model=isset($model->r2rrdev->namerisk) ? $model->r2rrdev->namerisk : $model->dtevt.$model->dtevt_other;//ถ้า query มีค่าว่างต้องเช็คก่อน
                  
              },
              'filter' => \yii\helpers\ArrayHelper::map(backend\models\Risk2risk::find()->all(), 'id', 'namerisk'), 
            ],                            
             'notepatient:text',
                /*      
                [
               'class' => 'kartik\grid\DataColumn',
               'attribute'=>'notepatient',
               'format'=>'html',   
               'contentOptions' => [
                   'style'=>'max-width: 350px; overflow: auto; word-wrap: break-word;'
               ],
               ],    
               */
                /*      
                [
               //'class' => 'kartik\grid\DataColumn',
               'attribute'=>'notepatient',
               'format'=>'html',   
               'value' => function($model){
                  //return wordwrap($model->notepatient,55,'<br>');
                  return substr_replace($model->notepatient,'...',55);

               }     
               ], 
                 */      
             'notehead:text',
             'noteceo:text',
             'notedepart:text',
            // 'star',
            // 'statusconfirm',
            // 'datereport',
            // 'daterespon',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
     ?>

</div>
