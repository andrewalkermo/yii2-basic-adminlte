<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indicated".
 *
 * @property int $id
 * @property int $ref
 * @property int $user
 * @property float $credited valor total ja ganho desse afiliado
 * @property float $refence_cpc ganhos totais em cima programa afiliados cliques desse indicado
 * @property float $refence_cpm
 * @property float $commission_levels isso seria para função dos nives uma comissão ganha em cima de caa indicado do indicado
 * @property string $recommendation data da recomendação
 * @property string $status status do indicado se esta ativo ou não
 */
class Indicated extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indicated';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref', 'user', 'recommendation', 'status'], 'required'],
            [['ref', 'user'], 'integer'],
            [['credited', 'refence_cpc', 'refence_cpm', 'commission_levels'], 'number'],
            [['recommendation', 'status'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ref' => Yii::t('app', 'Ref'),
            'user' => Yii::t('app', 'User'),
            'credited' => Yii::t('app', 'Credited'),
            'refence_cpc' => Yii::t('app', 'Refence Cpc'),
            'refence_cpm' => Yii::t('app', 'Refence Cpm'),
            'commission_levels' => Yii::t('app', 'Commission Levels'),
            'recommendation' => Yii::t('app', 'Recommendation'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
