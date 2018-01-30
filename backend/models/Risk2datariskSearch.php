<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Risk2datarisk;

/**
 * Risk2datariskSearch represents the model behind the search form about `backend\models\Risk2datarisk`.
 */
class Risk2datariskSearch extends Risk2datarisk
{
    /**
     * @inheritdoc
     */
    public $date1;
    public $date2;
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['hnno', 'name', 'age', 'gender', 'departreport', 'departrespon', 'daterigter', 'timer', 'fromevent', 'dtevt', 'dtevt_other', 'commen', 'typereport', 'notepatient', 'notehead', 'noteceo', 'notedepart', 'star', 'statusconfirm', 'datereport', 'daterespon'], 'safe'],
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

        $query = Risk2datarisk::find();

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
            'daterigter' => $this->daterigter,
            'datereport' => $this->datereport,
            'daterespon' => $this->daterespon, 
            
        ]);

        $query->andFilterWhere(['like', 'hnno', $this->hnno])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'departreport', $this->departreport])
            ->andFilterWhere(['like', 'departrespon', $this->departrespon])
            ->andFilterWhere(['like', 'timer', $this->timer])
            ->andFilterWhere(['like', 'fromevent', $this->fromevent])
            ->andFilterWhere(['like', 'dtevt', $this->dtevt])
            ->andFilterWhere(['like', 'commen', $this->commen])
            ->andFilterWhere(['like', 'typereport', $this->typereport])
            ->andFilterWhere(['like', 'notepatient', $this->notepatient])
            ->andFilterWhere(['like', 'notehead', $this->notehead])
            ->andFilterWhere(['like', 'noteceo', $this->noteceo])
            ->andFilterWhere(['like', 'notedepart', $this->notedepart])
            ->andFilterWhere(['like', 'star', $this->star])
            ->andFilterWhere(['like', 'statusconfirm', $this->statusconfirm])            
            ->orderBy(['id' => SORT_DESC]);
         
         $query->andFilterWhere(['between','daterigter', $this->date1, $this->date2]);       
        

        return $dataProvider;
    }
}
