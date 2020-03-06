<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Invested;

/**
 * InvestedSearch represents the model behind the search form of `app\models\Invested`.
 */
class InvestedSearch extends Invested
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'months', 'sitemax'], 'integer'],
            [['name_plan', 'checkout'], 'safe'],
            [['crash', 'min', 'max', 'reward', 'afiliate'], 'number'],
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
        $query = Invested::find();

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
            'months' => $this->months,
            'crash' => $this->crash,
            'min' => $this->min,
            'max' => $this->max,
            'reward' => $this->reward,
            'sitemax' => $this->sitemax,
            'afiliate' => $this->afiliate,
        ]);

        $query->andFilterWhere(['like', 'name_plan', $this->name_plan])
            ->andFilterWhere(['like', 'checkout', $this->checkout]);

        return $dataProvider;
    }
}
