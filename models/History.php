<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property int $user
 * @property float $total_received valor total  recebido nesse mês
 * @property float $total_interest juros ganho do mês
 * @property float $total_drawn total que foi sacado nesse mês
 * @property float $balance_referent saldo referente do mês
 * @property float $total_deposit valor total  depositado nesse mês
 * @property float $referral_bonus  bônus ganhado nesse mês por indicação
 * @property float $other_earnings ganhos diversos de outras formas de recompensas nesse mês
 * @property float $earningsclick total ganho com clicks nesse mês no afiliados
 * @property float $earningsviews total ganho com views nesse mês no afiliados
 * @property float $ads_referral Ganhos com publicidade de indicados nesse mês
 * @property float $commissions_referral comissões ganho sobre o investimento dos indicados nesse mês
 * @property string $what_month qual foi mês
 * @property string $last_updates ultima atualização
 * @property string $start_date data que iniciou essa contabilização , geralmente inicio do mês
 * @property string $end_date ultimo dia desse mês que foi contabilizado
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'what_month', 'last_updates', 'start_date', 'end_date'], 'required'],
            [['user'], 'integer'],
            [['total_received', 'total_interest', 'total_drawn', 'balance_referent', 'total_deposit', 'referral_bonus', 'other_earnings', 'earningsclick', 'earningsviews', 'ads_referral', 'commissions_referral'], 'number'],
            [['what_month', 'last_updates', 'start_date', 'end_date'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user' => Yii::t('app', 'User'),
            'total_received' => Yii::t('app', 'Total Received'),
            'total_interest' => Yii::t('app', 'Total Interest'),
            'total_drawn' => Yii::t('app', 'Total Drawn'),
            'balance_referent' => Yii::t('app', 'Balance Referent'),
            'total_deposit' => Yii::t('app', 'Total Deposit'),
            'referral_bonus' => Yii::t('app', 'Referral Bonus'),
            'other_earnings' => Yii::t('app', 'Other Earnings'),
            'earningsclick' => Yii::t('app', 'Earningsclick'),
            'earningsviews' => Yii::t('app', 'Earningsviews'),
            'ads_referral' => Yii::t('app', 'Ads Referral'),
            'commissions_referral' => Yii::t('app', 'Commissions Referral'),
            'what_month' => Yii::t('app', 'What Month'),
            'last_updates' => Yii::t('app', 'Last Updates'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
        ];
    }
}
