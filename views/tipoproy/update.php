<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tipoProy */

$this->title = 'Actualizar tipo proyecto: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipo proyecto', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-proy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
