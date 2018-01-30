<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk2risk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'coderisk')->textInput() ?>

    <?= $form->field($model, 'namerisk')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'codegroup')->textInput(['maxlength' => true]) ?>
    
        <?= $form->field($model, 'codegroup')->dropDownList(
            ArrayHelper::map(backend\models\Risk2group::find()->all(), 'codegroup', 'namegroup')
            ) ?>  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
