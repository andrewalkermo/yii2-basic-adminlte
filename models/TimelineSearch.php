<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Timeline;

/**
 * TimelineSearch represents the model behind the search form of `app\models\Timeline`.
 */
class TimelineSearch extends Timeline
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
            [['cookie', 'ip', 'reverse', 'icon', 'title_share', 'share', 'date_request', 'browser', 'SO'], 'safe'],
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
        $query = Timeline::find();

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

        $query->andFilterWhere(['like', 'cookie', $this->cookie])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'reverse', $this->reverse])
            ->andFilterWhere(['like', 'icon', $this->icon])
            ->andFilterWhere(['like', 'title_share', $this->title_share])
            ->andFilterWhere(['like', 'share', $this->share])
            ->andFilterWhere(['like', 'date_request', $this->date_request])
            ->andFilterWhere(['like', 'browser', $this->browser])
            ->andFilterWhere(['like', 'SO', $this->SO]);

        return $dataProvider;
    }
}