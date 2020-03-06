<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\History;

/**
 * HistorySearch represents the model behind the search form of `app\models\History`.
 */
class HistorySearch extends History
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
            [['total_received', 'total_interest', 'total_drawn', 'balance_referent', 'total_deposit', 'referral_bonus', 'other_earnings', 'earningsclick', 'earningsviews', 'ads_referral', 'commissions_referral'], 'number'],
            [['what_month', 'last_updates', 'start_date', 'end_date'], 'safe'],
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
        $query = History::find();

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
            'total_received' => $this->total_received,
            'total_interest' => $this->total_interest,
            'total_drawn' => $this->total_drawn,
            'balance_referent' => $this->balance_referent,
            'total_deposit' => $this->total_deposit,
            'referral_bonus' => $this->referral_bonus,
            'other_earnings' => $this->other_earnings,
            'earningsclick' => $this->earningsclick,
            'earningsviews' => $this->earningsviews,
            'ads_referral' => $this->ads_referral,
            'commissions_referral' => $this->commissions_referral,
        ]);

        $query->andFilterWhere(['like', 'what_month', $this->what_month])
            ->andFilterWhere(['like', 'last_updates', $this->last_updates])
            ->andFilterWhere(['like', 'start_date', $this->start_date])
            ->andFilterWhere(['like', 'end_date', $this->end_date]);

        return $dataProvider;
    }
}
