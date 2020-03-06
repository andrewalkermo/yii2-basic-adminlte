<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mp;

/**
 * MpSearch represents the model behind the search form of `app\models\Mp`.
 */
class MpSearch extends Mp
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'plan_id', 'level'], 'integer'],
            [['point', 'ref', 'name', 'last_name', 'email', 'pass', 'lang', 'what', 'document', 'phone', 'method', 'user', 'ip', 'hostname', 'browser', 'SO', 'transation_id', 'number_id', 'status_data'], 'safe'],
            [['amount', 'totalpay'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Mp::find();

        // add conditions that should always apply here
        $this->load($params);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
        ]);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'amount' => $this->amount,
            'totalpay' => $this->totalpay,
            'plan_id' => $this->plan_id,
            'level' => $this->level,
        ]);

        $query->andFilterWhere(['like', 'point', $this->point])
            ->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'what', $this->what])
            ->andFilterWhere(['like', 'document', $this->document])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'method', $this->method])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'hostname', $this->hostname])
            ->andFilterWhere(['like', 'browser', $this->browser])
            ->andFilterWhere(['like', 'SO', $this->SO])
            ->andFilterWhere(['like', 'transation_id', $this->transation_id])
            ->andFilterWhere(['like', 'number_id', $this->number_id])
            ->andFilterWhere(['like', 'status_data', $this->status_data]);

        return $dataProvider;
    }
}
