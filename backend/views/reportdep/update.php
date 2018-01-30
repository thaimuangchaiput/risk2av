<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Departreport */

$this->title = 'Update Departreport: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Departreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departreport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
