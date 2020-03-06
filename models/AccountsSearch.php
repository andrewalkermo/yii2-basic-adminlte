<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Accounts;

/**
 * AccountsSearch represents the model behind the search form of `app\models\Accounts`.
 */
class AccountsSearch extends Accounts
{
    public $pageSize = 10;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pageSize'],'safe'],
            [['id', 'myplan', 'type', 'confirm_email', 'level'], 'integer'],
            [['username', 'email', 'password', 'country', 'name', 'phone', 'status', 'date_register', 'type_payout', 'for_pay', 'last_login', 'check_nivel', 'document_country'], 'safe'],
            [['invested', 'balance'], 'number'],
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
        $query = Accounts::find();

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
            'invested' => $this->invested,
            'balance' => $this->balance,
            'myplan' => $this->myplan,
            'type' => $this->type,
            'confirm_email' => $this->confirm_email,
            'level' => $this->level,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'date_register', $this->date_register])
            ->andFilterWhere(['like', 'type_payout', $this->type_payout])
            ->andFilterWhere(['like', 'for_pay', $this->for_pay])
            ->andFilterWhere(['like', 'last_login', $this->last_login])
            ->andFilterWhere(['like', 'check_nivel', $this->check_nivel])
            ->andFilterWhere(['like', 'document_country', $this->document_country]);

        return $dataProvider;
    }
}
