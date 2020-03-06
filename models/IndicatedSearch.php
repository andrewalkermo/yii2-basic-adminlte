<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Indicated;

/**
 * IndicatedSearch represents the model behind the search form of `app\models\Indicated`.
 */
class IndicatedSearch extends Indicated
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'ref', 'user'], 'integer'],
            [['credited', 'refence_cpc', 'refence_cpm', 'commission_levels'], 'number'],
            [['recommendation', 'status'], 'safe'],
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
        $query = Indicated::find();

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
            'ref' => $this->ref,
            'user' => $this->user,
            'credited' => $this->credited,
            'refence_cpc' => $this->refence_cpc,
            'refence_cpm' => $this->refence_cpm,
            'commission_levels' => $this->commission_levels,
        ]);

        $query->andFilterWhere(['like', 'recommendation', $this->recommendation])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
