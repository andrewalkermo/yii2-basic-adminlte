<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Answers;

/**
 * AnswersSearch represents the model behind the search form of `app\models\Answers`.
 */
class AnswersSearch extends Answers
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'called', 'who'], 'integer'],
            [['ask', 'answer', 'date_request'], 'safe'],
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
        $query = Answers::find();

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
            'called' => $this->called,
            'who' => $this->who,
        ]);

        $query->andFilterWhere(['like', 'ask', $this->ask])
            ->andFilterWhere(['like', 'answer', $this->answer])
            ->andFilterWhere(['like', 'date_request', $this->date_request]);

        return $dataProvider;
    }
}
