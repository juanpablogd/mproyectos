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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_tipo', 'valor'], 'integer'],
            [['codigo_mun', 'cod_proy'], 'safe'],
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
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_tipo' => $this->id_tipo,
            'valor' => $this->valor,
        ]);

        $query->andFilterWhere(['like', 'codigo_mun', $this->codigo_mun])
            ->andFilterWhere(['like', 'cod_proy', $this->cod_proy]);

        return $dataProvider;
    }
}
