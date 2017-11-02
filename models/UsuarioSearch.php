<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form about `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{

  public $descripcion_sector;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_id', 'sector_id', 'activuser'], 'integer'],
            [['nombre', 'apellido', 'passworduser', 'mailuser', 'authkeyuser'], 'safe'],
            [['descripcion_sector'],'safe'],
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
        $query = Usuario::find();

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
            'usuario_id' => $this->usuario_id,
            'descripcion_sector' => $this->descripcion_sector,
            'activuser' => $this->activuser,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'passworduser', $this->passworduser])
            ->andFilterWhere(['like', 'mailuser', $this->mailuser])
            ->andFilterWhere(['like', 'authkeyuser', $this->authkeyuser]);

        return $dataProvider;
    }
}
