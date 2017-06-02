<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tipoProy */

$this->title = 'Create Tipo Proy';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Proys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-proy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
