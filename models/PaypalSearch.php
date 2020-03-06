<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Paypal;

/**
 * PaypalSearch represents the model behind the search form of `app\models\Paypal`.
 */
class PaypalSearch extends Paypal
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
            [['token', 'PayerID', 'status', 'itemNome', 'itemPreco', 'itemQnt', 'itemTotal', 'taxa', 'total', 'transactionID'], 'safe'],
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
        $query = Paypal::find();

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
        ]);

        $query->andFilterWhere(['like', 'token', $this->token])
            ->andFilterWhere(['like', 'PayerID', $this->PayerID])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'itemNome', $this->itemNome])
            ->andFilterWhere(['like', 'itemPreco', $this->itemPreco])
            ->andFilterWhere(['like', 'itemQnt', $this->itemQnt])
            ->andFilterWhere(['like', 'itemTotal', $this->itemTotal])
            ->andFilterWhere(['like', 'taxa', $this->taxa])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'transactionID', $this->transactionID]);

        return $dataProvider;
    }
}
