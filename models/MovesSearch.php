<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Moves;

/**
 * MovesSearch represents the model behind the search form of `app\models\Moves`.
 */
class MovesSearch extends Moves
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'user', 'id_cash', 'status'], 'integer'],
            [['date_move', 'description'], 'safe'],
            [['balance'], 'number'],
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
        $query = Moves::find();

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
            'id_cash' => $this->id_cash,
            'status' => $this->status,
            'balance' => $this->balance,
        ]);

        $query->andFilterWhere(['like', 'date_move', $this->date_move])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}