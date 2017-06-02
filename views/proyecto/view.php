<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\money\MaskMoney;
/* @var $this yii\web\View */
/* @var $model app\models\proyecto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyecto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro que desea eliminar este elemeno?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Municipio',
                'value' => function($model) {
                    return $model->codigoMun['nombre_mun'];
                },
            ],
            [
                'label' => 'Tipo',
                'value' => function($model) {
                    return $model->idTipo['tipo_nombre'];
                },
            ],
            'cod_proy',
            [
                'label' => 'Val',
                'value' => function($model) {
                    return  yii::$app->formatter->asCurrency($model->valor);
                },
            ],
        ],
    ]) ?>

</div>
