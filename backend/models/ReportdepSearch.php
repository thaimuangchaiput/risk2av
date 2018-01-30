<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Departreport;

/**
 * ReportdepSearch represents the model behind the search form about `backend\models\Departreport`.
 */
class ReportdepSearch extends Departreport
{
    /**
     * @inheritdoc
     */
    public $date1;
    public $date2;    
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['DeptId', 'DeptName', 'gdeptid', 'username', 'passwords', 'status'], 'safe'],
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
        $query = Departreport::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => FALSE,
          /*  'pagination' => [
                'pagesize' => 10
            ],   */              
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
        ]);

        $query->andFilterWhere(['like', 'DeptId', $this->DeptId])
            ->andFilterWhere(['like', 'DeptName', $this->DeptName])
            ->andFilterWhere(['like', 'gdeptid', $this->gdeptid])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'passwords', $this->passwords])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
