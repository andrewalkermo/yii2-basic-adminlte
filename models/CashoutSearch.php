<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cashout;

/**
 * CashoutSearch represents the model behind the search form of `app\models\Cashout`.
 */
class CashoutSearch extends Cashout
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'user'], 'integer'],
            [['amount'], 'number'],
            [['currenty', 'date_request', 'paid_in', 'status', 'type', 'receipt', 'month', 'ano', 'process', 'process_info', 'transation_id', 'number_id'], 'safe'],
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
        $query = Cashout::find();

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
            'user' => $this->user,
            'amount' => $this->amount,
        ]);

        $query->andFilterWhere(['like', 'currenty', $this->currenty])
            ->andFilterWhere(['like', 'date_request', $this->date_request])
            ->andFilterWhere(['like', 'paid_in', $this->paid_in])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'receipt', $this->receipt])
            ->andFilterWhere(['like', 'month', $this->month])
            ->andFilterWhere(['like', 'ano', $this->ano])
            ->andFilterWhere(['like', 'process', $this->process])
            ->andFilterWhere(['like', 'process_info', $this->process_info])
            ->andFilterWhere(['like', 'transation_id', $this->transation_id])
            ->andFilterWhere(['like', 'number_id', $this->number_id]);

        return $dataProvider;
    }
}
