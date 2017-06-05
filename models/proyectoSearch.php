<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\proyecto;

/**
 * proyectoSearch represents the model behind the search form about `app\models\proyecto`.
 */
class proyectoSearch extends proyecto
{
    public $nombre_mun;
    public $tipo_nombre;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_tipo', 'valor'], 'integer'],
            [['codigo_mun', 'cod_proy', 'nombre_mun','tipo_nombre'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = proyecto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['nombre_mun', 'tipo_nombre','cod_proy', 'valor']]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->joinWith('codigoMun');
        $query->joinWith('idTipo');

        $query->andFilterWhere(['like', 'cod_proy', $this->cod_proy])
            ->andFilterWhere(['like', 'administrativa.g_municipio_simp.nombre_mun', $this->nombre_mun])
            ->andFilterWhere(['like', 'seguimientopdd.mp_p_tipo.tipo_nombre', $this->tipo_nombre])
            ->andFilterWhere(['=', 'valor', $this->valor])
            ;

        return $dataProvider;
    }
}
