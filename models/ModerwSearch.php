<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Moderw;

/**
 * ModerwSearch represents the model behind the search form about `app\models\Moderw`.
 */
class ModerwSearch extends Moderw
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['moderw_id'], 'integer'],
            [['moderw'], 'safe'],
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
        $query = Moderw::find();

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
            'moderw_id' => $this->moderw_id,
        ]);

        $query->andFilterWhere(['like', 'moderw', $this->moderw]);

        return $dataProvider;
    }
}
