<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Departreport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departreport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DeptId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DeptName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gdeptid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passwords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
