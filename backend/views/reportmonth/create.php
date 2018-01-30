<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Risk2datarisk */

$this->title = 'Create Risk2datarisk';
$this->params['breadcrumbs'][] = ['label' => 'Risk2datarisks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risk2datarisk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
