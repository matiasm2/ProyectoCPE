<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Instituto;

/**
 * InstitutoSearch represents the model behind the search form about `app\models\Instituto`.
 */
class InstitutoSearch extends Instituto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instituto_id'], 'integer'],
            [['nombre'], 'safe'],
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
        $query = Instituto::find();

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
            'instituto_id' => $this->instituto_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
