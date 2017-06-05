<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\proyectoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyecto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Proyecto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Municipio',
                'format' => 'ntext',
                'attribute'=>'nombre_mun',
                'value' => function($model) {
                    return $model->codigoMun['nombre_mun'];
                },
            ],
            [
                'label' => 'Tipo',
                'format' => 'ntext',
                'attribute'=>'tipo_nombre',
                'value' => function($model) {
                    return $model->idTipo['tipo_nombre'];
                },
            ],
            'cod_proy',
            [
                'label' => 'Valor',
                'attribute'=>'valor',
                'value' => function($model) {
                    return  yii::$app->formatter->asCurrency($model->valor);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
