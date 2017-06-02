<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrativa.g_municipio_simp".
 *
 * @property string $codigo_mun
 * @property string $nombre_mun
 * @property string $geom
 * @property string $codigo_pro
 * @property string $padre
 *
 * @property EmergenciasHIncendios[] $emergenciasHIncendios
 * @property Modulo123TUsuarioNuse[] $modulo123TUsuarioNuses
 * @property SeguimientopddMpTProyecto[] $seguimientopddMpTProyectos
 */
class gMunicipioSimp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrativa.g_municipio_simp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo_mun'], 'required'],
            [['codigo_mun'], 'string', 'max' => 5],
            [['nombre_mun'], 'string', 'max' => 100],
            [['padre'], 'string', 'max' => 18],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo_mun' => 'Codigo Mun',
            'nombre_mun' => 'Municipio',
            'padre' => 'Padre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeguimientopddMpTProyectos()
    {
        return $this->hasMany(SeguimientopddMpTProyecto::className(), ['codigo_mun' => 'codigo_mun']);
    }
}
