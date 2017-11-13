<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Archivoprograma;
use app\models\Usuario;

/**
 * ArchivoprogramaSearch represents the model behind the search form about `app\models\Archivoprograma`.
 */
class ArchivoprogramaSearch extends Archivoprograma
{
    public $nombre_usuario;
    public $descripcion_estado;
    public $descripcion_programa;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_id', 'estado_id'], 'integer'],
            [['archivo', 'fecha','nombre_usuario','descripcion_estado',
              'programa_id','archivoprograma_id','descripcion_programa'], 'safe'],
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
            'descripcion_programa' => $this->descripcion_programa,
            //'archivoprograma_id' => $this->archivoprograma_id,
            'programa_id' => $this->programa_id,
            //'usuario_id' => $this->usuario_id,
            'nombre_usuario' => $this->nombre_usuario,
            //'estado_id' => $this->estado_id,
            'descripcionEstado' => $this->descripcion_estado,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'archivo', $this->archivo])
              ->andFilterWhere(['like','programa_id', $this->programa_id]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchPorIdPrograma($idprograma)
    {
        $query = Archivoprograma::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'programa_id' => $idprograma,

        ]);

        return $dataProvider;
    }

}
