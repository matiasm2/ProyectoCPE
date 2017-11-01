<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asignsector;

/**
 * AsignSearch represents the model behind the search form about `app\models\Asignsector`.
 */
class AsignSearch extends Asignsector
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asignsector_id', 'actionrole_id', 'sector_id'], 'integer'],
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
        $query = Asignsector::find();

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
            'asignsector_id' => $this->asignsector_id,
            'actionrole_id' => $this->actionrole_id,
            'sector_id' => $this->sector_id,
        ]);

        return $dataProvider;
    }
}
