<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Catchthigh;

/**
 * CatchthighSearch represents the model behind the search form of `app\models\Catchthigh`.
 */
class CatchthighSearch extends Catchthigh
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'user', 'id_site'], 'integer'],
            [['cookie', 'ip', 'reverse', 'date_request', 'drops', 'browser', 'reference', 'SO', 'sequel', 'country', 'state', 'city'], 'safe'],
            [['clicks_pay', 'views_pay'], 'number'],
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
        $query = Catchthigh::find();

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
            'clicks_pay' => $this->clicks_pay,
            'views_pay' => $this->views_pay,
            'id_site' => $this->id_site,
        ]);

        $query->andFilterWhere(['like', 'cookie', $this->cookie])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'reverse', $this->reverse])
            ->andFilterWhere(['like', 'date_request', $this->date_request])
            ->andFilterWhere(['like', 'drops', $this->drops])
            ->andFilterWhere(['like', 'browser', $this->browser])
            ->andFilterWhere(['like', 'reference', $this->reference])
            ->andFilterWhere(['like', 'SO', $this->SO])
            ->andFilterWhere(['like', 'sequel', $this->sequel])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'city', $this->city]);

        return $dataProvider;
    }
}
