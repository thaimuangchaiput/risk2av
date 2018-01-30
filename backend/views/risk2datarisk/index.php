<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Risk2datariskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//echo "dataProvider == ";
//print_r($dataProvider);
//echo '<hr>';
//echo "searchModel == ";
//print_r($searchModel);
//echo "date1 = ".$date1;
//echo "<br/>";
//echo "date2 = ".$date2;
//print_r($items1);
//echo "<br/>";

$this->title = 'ค้นหา/แก้ไข ข้อมูลอุบัติการณ์ความเสี่ยง';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="risk2datarisk-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', [
        'model' => $searchModel, 
        'date1' => $date1, 
        'date2' => $date2, 
            ]); ?>
<div class="risk2datarisk-form">

</div>

    <p>
        <?= Html::a('บันทึกใบรายงานอุบัติการณ์ความเสี่ยง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
            'panel'=>[
            'before'=> ''
            ],        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //['class' => 'yii\grid\CheckboxColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            //'id',
            'daterigter',
            'hnno',
            'name',
            //'age',
            //'gender',
            // 'departreport:ntext',
            // 'departrespon:ntext',
             
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
              'format'=>'text',
              'value' => function($model){
                  //return $model->r2rrdev->namerisk;
                  return $model=isset($model->r2rrdev->namerisk) ? $model->r2rrdev->namerisk : $model->dtevt.$model->dtevt_other;//ถ้า query มีค่าว่างต้องเช็คก่อน
                  
              },
              'filter' => \yii\helpers\ArrayHelper::map(backend\models\Risk2risk::find()->all(), 'id', 'namerisk'), 
            ],  
            //'dtevt_other:ntext',          
            // 'commen:ntext',
            // 'typereport:ntext',
            // 'notepatient:ntext',
            // 'notehead:ntext',
            // 'noteceo:ntext',
            // 'notedepart:ntext',
            // 'star',
            // 'statusconfirm',
            // 'datereport',
            // 'daterespon',

            
        ],
    ]); ?>
</div>
