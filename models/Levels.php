<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "levels".
 *
 * @property int $id
 * @property string $name
 * @property int $requirement_indications indicações ativas cada  3 meses
 * @property float $requirement_interest lucro mensal  cada 1 mês minimo atingir o nivel
 * @property float $requirement_aplication valor de investimento minimo cada 3 meses 
 * @property int $active_rent_referrals ativo função de alugar indicados
 * @property int $active_paid_click ativo função PTC
 * @property int $active_without_limit ativo função sem limite saque
 * @property int $active_special_reward uma taxa de recompensa diferente das demais  mensal
 * @property int $active_indication_levels ativar função de niveis de indicação maximo ate nivel 3 de recompensa  
 * @property int $active_special_support ativar função suporte priorizado
 */
class Levels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'levels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['requirement_indications', 'active_rent_referrals', 'active_paid_click', 'active_without_limit', 'active_special_reward', 'active_indication_levels', 'active_special_support'], 'integer'],
            [['requirement_interest', 'requirement_aplication'], 'number'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'requirement_indications' => Yii::t('app', 'Requirement Indications'),
            'requirement_interest' => Yii::t('app', 'Requirement Interest'),
            'requirement_aplication' => Yii::t('app', 'Requirement Aplication'),
            'active_rent_referrals' => Yii::t('app', 'Active Rent Referrals'),
            'active_paid_click' => Yii::t('app', 'Active Paid Click'),
            'active_without_limit' => Yii::t('app', 'Active Without Limit'),
            'active_special_reward' => Yii::t('app', 'Active Special Reward'),
            'active_indication_levels' => Yii::t('app', 'Active Indication Levels'),
            'active_special_support' => Yii::t('app', 'Active Special Support'),
        ];
    }
}
