<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seguimientopdd.mp_t_proyecto".
 *
 * @property integer $id
 * @property integer $id_tipo
 * @property string $codigo_mun
 * @property string $cod_proy
 * @property string $valor
 *
 * @property AdministrativaGMunicipioSimp $codigoMun
 * @property SeguimientopddMpPTipo $idTipo
 */
class proyecto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seguimientopdd.mp_t_proyecto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo', 'codigo_mun', 'cod_proy', 'valor'], 'required'],
            [['id_tipo', 'valor'], 'integer'],
            [['codigo_mun'], 'string', 'max' => 5],
            [['cod_proy'], 'string', 'max' => 12],
            [['codigo_mun'], 'exist', 'skipOnError' => true, 'targetClass' => gMunicipioSimp::className(), 'targetAttribute' => ['codigo_mun' => 'codigo_mun']],
            [['id_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => tipoProy::className(), 'targetAttribute' => ['id_tipo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tipo' => 'Tipo',
            'codigo_mun' => 'Municipio',
            'cod_proy' => 'Codigo Proy',
            'valor' => 'Valor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoMun()
    {
        return $this->hasOne(gMunicipioSimp::className(), ['codigo_mun' => 'codigo_mun']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipo()
    {
        return $this->hasOne(tipoProy::className(), ['id' => 'id_tipo']);
    }
}
