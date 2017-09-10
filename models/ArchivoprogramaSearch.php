<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Archivoprograma;

/**
 * ArchivoprogramaSearch represents the model behind the search form about `app\models\Archivoprograma`.
 */
class ArchivoprogramaSearch extends Archivoprograma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['archivoprograma_id', 'programa_id', 'usuario_id', 'estado_id'], 'integer'],
            [['archivo'], 'safe'],
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
        $query = Archivoprograma::find();

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
            'archivoprograma_id' => $this->archivoprograma_id,
            'programa_id' => $this->programa_id,
            'usuario_id' => $this->usuario_id,
            'estado_id' => $this->estado_id,
        ]);

        $query->andFilterWhere(['like', 'archivo', $this->archivo]);

        return $dataProvider;
    }
}
