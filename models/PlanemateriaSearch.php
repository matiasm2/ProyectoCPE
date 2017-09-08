<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Planmateria;

/**
 * PlanemateriaSearch represents the model behind the search form about `app\models\Planmateria`.
 */
class PlanemateriaSearch extends Planmateria
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planmateria_id', 'planestudio_id', 'materia_id'], 'integer'],
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
        $query = Planmateria::find();

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
            'planmateria_id' => $this->planmateria_id,
            'planestudio_id' => $this->planestudio_id,
            'materia_id' => $this->materia_id,
        ]);

        return $dataProvider;
    }
}
