<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cards;

/**
 * CardsSearch represents the model behind the search form of `app\models\Cards`.
 */
class CardsSearch extends Cards
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
            [['card_number', 'name_card', 'month', 'year', 'pin', 'status', 'date_used', 'flag', 'transactionID'], 'safe'],
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
        $query = Cards::find();

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

        $query->andFilterWhere(['like', 'card_number', $this->card_number])
            ->andFilterWhere(['like', 'name_card', $this->name_card])
            ->andFilterWhere(['like', 'month', $this->month])
            ->andFilterWhere(['like', 'year', $this->year])
            ->andFilterWhere(['like', 'pin', $this->pin])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'date_used', $this->date_used])
            ->andFilterWhere(['like', 'flag', $this->flag])
            ->andFilterWhere(['like', 'transactionID', $this->transactionID]);

        return $dataProvider;
    }
}
