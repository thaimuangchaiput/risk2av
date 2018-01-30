<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\ReportdepSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departreport-search">

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
    <?php // echo  $form->field($model, 'ID') ?>

    <?php // echo  $form->field($model, 'DeptId') ?>

    <?php // echo  $form->field($model, 'DeptName') ?>

    <?php // echo  $form->field($model, 'gdeptid') ?>

    <?php // echo  $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'passwords') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
