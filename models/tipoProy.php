<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seguimientopdd.mp_p_tipo".
 *
 * @property integer $id
 * @property string $estado
 * @property string $tipo_nombre
 *
 * @property SeguimientopddMpTProyecto[] $seguimientopddMpTProyectos
 */
class tipoProy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seguimientopdd.mp_p_tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'string'],
            [['tipo_nombre'], 'required'],
            [['tipo_nombre'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado' => 'Estado',
            'tipo_nombre' => 'Tipo Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeguimientopddMpTProyectos()
    {
        return $this->hasMany(SeguimientopddMpTProyecto::className(), ['id_tipo' => 'id']);
    }
}
