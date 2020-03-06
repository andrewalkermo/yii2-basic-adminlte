<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paypal".
 *
 * @property int $id
 * @property string $token
 * @property string $PayerID
 * @property int $user
 * @property string $status
 * @property string $itemNome
 * @property string $itemPreco
 * @property string $itemQnt
 * @property string $itemTotal
 * @property string $taxa
 * @property string $total
 * @property string $transactionID
 */
class Paypal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paypal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['token', 'PayerID', 'user', 'status', 'itemNome', 'itemPreco', 'itemQnt', 'itemTotal', 'taxa', 'total', 'transactionID'], 'required'],
            [['token', 'PayerID', 'status', 'itemNome', 'itemPreco', 'itemQnt', 'itemTotal', 'taxa', 'total', 'transactionID'], 'string'],
            [['user'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'token' => Yii::t('app', 'Token'),
            'PayerID' => Yii::t('app', 'Payer ID'),
            'user' => Yii::t('app', 'User'),
            'status' => Yii::t('app', 'Status'),
            'itemNome' => Yii::t('app', 'Item Nome'),
            'itemPreco' => Yii::t('app', 'Item Preco'),
            'itemQnt' => Yii::t('app', 'Item Qnt'),
            'itemTotal' => Yii::t('app', 'Item Total'),
            'taxa' => Yii::t('app', 'Taxa'),
            'total' => Yii::t('app', 'Total'),
            'transactionID' => Yii::t('app', 'Transaction ID'),
        ];
    }
}
