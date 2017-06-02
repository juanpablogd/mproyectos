<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\money\MaskMoney;
use app\models\gMunicipioSimp;
use app\models\tipoProy;

/* @var $this yii\web\View */
/* @var $model app\models\proyecto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-form">

    <?php $form = ActiveForm::begin(); ?>

<?php    // Normal select with ActiveForm & model
    echo $form->field($model, 'codigo_mun')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(gMunicipioSimp::find('codigo_mun,nombre_mun')->orderBy(['nombre_mun'=>SORT_ASC])->all(),'codigo_mun','nombre_mun'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione un Municipio ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); 
?>
<?php    // Normal select with ActiveForm & model
    echo $form->field($model, 'id_tipo')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(tipoProy::find()->orderBy(['tipo_nombre'=>SORT_ASC])->all(),'id','tipo_nombre'),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione el tipo ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); 
?>

    <?= $form->field($model, 'cod_proy')->textInput(['maxlength' => true]) ?>

<?php    // Normal select with ActiveForm & model
    echo $form->field($model, 'valor')->widget(MaskMoney::classname(), [
        'pluginOptions' => [
            'prefix' => '$ ',
            'precision' => 0, 
            'allowZero' => false,
            'allowNegative' => false,
            'thousandSeparator' => '.',
        ]
    ]);
?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
