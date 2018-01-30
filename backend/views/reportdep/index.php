<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use backend\models\Risk2datarisk;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReportdepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/*
                echo 'd1 = '.$date1;
                echo '<br>';
                echo 'd1 = '.$date2;
*/      
//print_r($searchModel);
$this->title = 'ข้อมูลหน่วยงานที่รายงานความเสี่ยง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departreport-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
                ระหว่างวันที่:
    
<?php  echo DatePicker::widget([
    'inline' => false, 
    'language' => 'th',     
    'name' => 'date1',
    'value' => $date1,
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]); ?>
               
        ถึง:
<?php  echo DatePicker::widget([
    'inline' => false, 
    'language' => 'th',     
    'name' => 'date2',
    'value' => $date2,
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]); ?>
        
</br>
                  <button class='btn btn-success'> ตกลง </button> 

                    <?php Activeform::end(); ?>
    <p>
        <?php // Html::a('Create Departreport', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
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
              'value' => function($model) use($date1,$date2) {

                //$departrespon = Departreport::findOne($model->departrespon);
                $count = Risk2datarisk::find()
                //->where(['departreport' => $model->ID]) 
                //->where(['BETWEEN','datereport',"2016-10-01","2017-09-30"])  
                ->where(['BETWEEN','datereport',$date1,$date2])        
                ->andFilterWhere(['departreport' => $model->ID])
                ->count();
                return $count;
              
              },               
            ], 
            [
              'attribute' => 'numev_ep',
              'value' => function($model) use($date1,$date2) {
                 
                //$departrespon = Departreport::findOne($model->departrespon);
                $count = Risk2datarisk::find()
                //->where(['departrespon' => $model->ID])
                //->where(['BETWEEN','datereport',"2016-10-01","2017-09-30"])  
                ->where(['BETWEEN','datereport',$date1,$date2])          
                ->andFilterWhere(['departrespon' => $model->ID])        
                ->count();
                return $count; 
              
              },               
            ],               
            //'gdeptid',
            //'username',
            // 'passwords',
            // 'status',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
