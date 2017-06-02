<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tipoProy */

$this->title = 'Update Tipo Proy: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Proys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-proy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
