<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Risk2group */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="risk2group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codegroup')->textInput() ?>

    <?= $form->field($model, 'namegroup')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
