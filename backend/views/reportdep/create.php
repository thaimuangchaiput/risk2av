<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Departreport */

$this->title = 'Create Departreport';
$this->params['breadcrumbs'][] = ['label' => 'Departreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departreport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
