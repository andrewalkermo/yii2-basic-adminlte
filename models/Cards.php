<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cards".
 *
 * @property int $id
 * @property int $user
 * @property string $card_number
 * @property string $name_card
 * @property string $month
 * @property string $year
 * @property string $pin
 * @property string $status
 * @property string $date_used
 * @property string $flag
 * @property string $transactionID
 */
class Cards extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'card_number', 'name_card', 'month', 'year', 'pin', 'status', 'date_used', 'flag', 'transactionID'], 'required'],
            [['user'], 'integer'],
            [['card_number', 'name_card', 'month', 'year', 'pin', 'status', 'date_used', 'flag', 'transactionID'], 'string'],
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
            'card_number' => Yii::t('app', 'Card Number'),
            'name_card' => Yii::t('app', 'Name Card'),
            'month' => Yii::t('app', 'Month'),
            'year' => Yii::t('app', 'Year'),
            'pin' => Yii::t('app', 'Pin'),
            'status' => Yii::t('app', 'Status'),
            'date_used' => Yii::t('app', 'Date Used'),
            'flag' => Yii::t('app', 'Flag'),
            'transactionID' => Yii::t('app', 'Transaction ID'),
        ];
    }
}
