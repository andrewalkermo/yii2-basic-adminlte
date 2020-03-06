<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Adverts;

/**
 * AdvertsSearch represents the model behind the search form of `app\models\Adverts`.
 */
class AdvertsSearch extends Adverts
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id'], 'integer'],
            [['name_ads', 'url', 'banner'], 'safe'],
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
        $query = Adverts::find();

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
        ]);

        $query->andFilterWhere(['like', 'name_ads', $this->name_ads])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'banner', $this->banner]);

        return $dataProvider;
    }
}
