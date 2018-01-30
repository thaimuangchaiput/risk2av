<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\ReportmonthSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk2datarisk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
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
    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'hnno') ?>

    <?php // $form->field($model, 'name') ?>

    <?php // $form->field($model, 'age') ?>

    <?php // $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'departreport') ?>

    <?php // echo $form->field($model, 'departrespon') ?>

    <?php // echo $form->field($model, 'daterigter') ?>

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
