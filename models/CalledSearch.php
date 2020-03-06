<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Called;

/**
 * CalledSearch represents the model behind the search form of `app\models\Called`.
 */
class CalledSearch extends Called
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'user', 'status'], 'integer'],
            [['ask', 'answer', 'email_return', 'protocol', 'date_open', 'speed'], 'safe'],
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
        $query = Called::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'ask', $this->ask])
            ->andFilterWhere(['like', 'answer', $this->answer])
            ->andFilterWhere(['like', 'email_return', $this->email_return])
            ->andFilterWhere(['like', 'protocol', $this->protocol])
            ->andFilterWhere(['like', 'date_open', $this->date_open])
            ->andFilterWhere(['like', 'speed', $this->speed]);

        return $dataProvider;
    }
}
