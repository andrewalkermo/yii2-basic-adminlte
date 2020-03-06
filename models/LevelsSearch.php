<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Levels;

/**
 * LevelsSearch represents the model behind the search form of `app\models\Levels`.
 */
class LevelsSearch extends Levels
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'requirement_indications', 'active_rent_referrals', 'active_paid_click', 'active_without_limit', 'active_special_reward', 'active_indication_levels', 'active_special_support'], 'integer'],
            [['name'], 'safe'],
            [['requirement_interest', 'requirement_aplication'], 'number'],
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
        $query = Levels::find();

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
            'requirement_indications' => $this->requirement_indications,
            'requirement_interest' => $this->requirement_interest,
            'requirement_aplication' => $this->requirement_aplication,
            'active_rent_referrals' => $this->active_rent_referrals,
            'active_paid_click' => $this->active_paid_click,
            'active_without_limit' => $this->active_without_limit,
            'active_special_reward' => $this->active_special_reward,
            'active_indication_levels' => $this->active_indication_levels,
            'active_special_support' => $this->active_special_support,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
