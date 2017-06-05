<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\proyectoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nombre_mun') ?>

    <?= $form->field($model, 'tipo_nombre') ?>

    <?= $form->field($model, 'cod_proy') ?>

    <?= $form->field($model, 'valor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
