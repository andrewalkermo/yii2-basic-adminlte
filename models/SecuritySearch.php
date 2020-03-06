<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Security;

/**
 * SecuritySearch represents the model behind the search form of `app\models\Security`.
 */
class SecuritySearch extends Security
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
            [['pincode', 'ip', 'sys', 'browser', 'document'], 'safe'],
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
        $query = Security::find();

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

        $query->andFilterWhere(['like', 'pincode', $this->pincode])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'sys', $this->sys])
            ->andFilterWhere(['like', 'browser', $this->browser])
            ->andFilterWhere(['like', 'document', $this->document]);

        return $dataProvider;
    }
}
