<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk2datarisk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hnno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departreport')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'departrespon')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'daterigter')->textInput() ?>

    <?= $form->field($model, 'timer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fromevent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dtevt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'commen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'typereport')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notepatient')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notehead')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'noteceo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notedepart')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'star')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusconfirm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datereport')->textInput() ?>

    <?= $form->field($model, 'daterespon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
