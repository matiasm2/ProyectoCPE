<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Programa;

/**
 * ProgramaSearch represents the model behind the search form about `app\models\Programa`.
 */
class ProgramaSearch extends Programa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['programa_id', 'planmateria_id', 'ano_id'], 'integer'],
            [['fecha', 'descripcion'], 'safe'],
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
        $query = Programa::find();

        $query->leftJoin('ano','ano.ano_id=programa.ano_id');

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
            'programa_id' => $this->programa_id,
            'planmateria_id' => $this->planmateria_id,
            'ano.ano' => $this->ano_id,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
