<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Planes;

/**
 * PlanesSearch represents the model behind the search form about `app\models\Planes`.
 */
class PlanesSearch extends Planes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planes_id', 'ano_id', 'carrera_id', 'ano_nivel', 'instituto_id', 'materia_id'], 'integer'],
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
        $query = Planes::find();

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
            'planes_id' => $this->planes_id,
            'ano_id' => $this->ano_id,
            'carrera_id' => $this->carrera_id,
            'ano_nivel' => $this->ano_nivel,
            'instituto_id' => $this->instituto_id,
            'materia_id' => $this->materia_id,
        ]);

        return $dataProvider;
    }
}
