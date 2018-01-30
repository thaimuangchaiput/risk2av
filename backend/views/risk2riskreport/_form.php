<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2risk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk2risk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'coderisk')->textInput() ?>

    <?= $form->field($model, 'namerisk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'codegroup')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
