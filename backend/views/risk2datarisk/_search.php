<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;
use dosamigos\datepicker\DatePicker;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datariskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk2datarisk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php $form->field($model, 'id') ?>

    <?= $form->field($model, 'hnno') ?>

    <?=  $form->field($model, 'name') ?>

    <?php // $form->field($model, 'age') ?>

    <?php // $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'departreport') ?>

    <?php // echo $form->field($model, 'departrespon') ?>

    <?php // $form->field($model, 'daterigter') ?>
    
    <?php /*
            echo "วันที่<br/>".yii\jui\DatePicker::widget([
            
                'model' => $model,
                'attribute' => 'daterigter',
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
            
        ]);
            echo '<br/><br/>';
     * 
     */
    ?>

                ระหว่างวันที่:
    
<?= $form->field($model, 'date1')->widget(
    DatePicker::className(), [
        // inline too, not bad        
         'inline' => false, 
        'language' => 'th', 
         // modify template for custom rendering
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
               
        ถึง:
<?= $form->field($model, 'date2')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
        'language' => 'th', 
         // modify template for custom rendering
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>

    <?php // echo $form->field($model, 'timer') ?>

    <?php // echo $form->field($model, 'fromevent') ?>

    <?php // echo $form->field($model, 'dataevent') ?>

    <?php // echo $form->field($model, 'commen') ?>

    <?php // echo $form->field($model, 'typereport') ?>

    <?php // echo $form->field($model, 'notepatient') ?>

    <?php // echo $form->field($model, 'notehead') ?>

    <?php // echo $form->field($model, 'noteceo') ?>

    <?php // echo $form->field($model, 'notedepart') ?>

    <?php // echo $form->field($model, 'star') ?>

    <?php // echo $form->field($model, 'statusconfirm') ?>

    <?php // echo $form->field($model, 'datereport') ?>

    <?php // echo $form->field($model, 'daterespon') ?>

    <div class="form-group">
        <?= Html::submitButton('ค้นหา', ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
