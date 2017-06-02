<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tipoProy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-proy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tipo_nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
