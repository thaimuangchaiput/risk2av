<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Risk2risk;

/**
 * Risk2riskreportSearch represents the model behind the search form about `backend\models\Risk2risk`.
 */
class Risk2riskreportSearch extends Risk2risk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'coderisk'], 'integer'],
            [['namerisk', 'codegroup'], 'safe'],
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
        $query = Risk2risk::find();

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
            'id' => $this->id,
            'coderisk' => $this->coderisk,
        ]);

        $query->andFilterWhere(['like', 'namerisk', $this->namerisk])
            ->andFilterWhere(['like', 'codegroup', $this->codegroup]);

        return $dataProvider;
    }
}
