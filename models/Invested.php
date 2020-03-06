<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invested".
 *
 * @property int $id
 * @property string $name_plan
 * @property int $months
 * @property float $crash
 * @property float $min
 * @property float $max se estiver em ZERO significa sem limite
 * @property float $reward 	isso e porcentagem	
 * @property int $sitemax
 * @property float $afiliate isso e porcentagem
 * @property string $checkout campo que vai na url string no checkout
 */
class Invested extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invested';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_plan', 'months', 'sitemax', 'checkout'], 'required'],
            [['months', 'sitemax'], 'integer'],
            [['crash', 'min', 'max', 'reward', 'afiliate'], 'number'],
            [['name_plan'], 'string', 'max' => 250],
            [['checkout'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_plan' => Yii::t('app', 'Name Plan'),
            'months' => Yii::t('app', 'Months'),
            'crash' => Yii::t('app', 'Crash'),
            'min' => Yii::t('app', 'Min'),
            'max' => Yii::t('app', 'Max'),
            'reward' => Yii::t('app', 'Reward'),
            'sitemax' => Yii::t('app', 'Sitemax'),
            'afiliate' => Yii::t('app', 'Afiliate'),
            'checkout' => Yii::t('app', 'Checkout'),
        ];
    }
}
