<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Planestudio;

/**
 * PlanestudioSearch represents the model behind the search form about `app\models\Planestudio`.
 */
class PlanestudioSearch extends Planestudio
{

  public $descripcion_carrera;
  public $descripcion_ano;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planestudio_id', 'carrera_id', 'ano_id'], 'integer'],
            [['descripcion_ano','descripcion_carrera'], 'safe'],
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
        $query = Planestudio::find();

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
            'planestudio_id' => $this->planestudio_id,
            'carrera_id' => $this->carrera_id,
            'ano_id' => $this->ano_id,
            'descripcion_carrera' => $this->descripcion_carrera,
            'descripcion_ano' => $this->descripcion_ano,
        ]);

        return $dataProvider;
    }
}
