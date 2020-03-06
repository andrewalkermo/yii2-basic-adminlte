<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cashout".
 *
 * @property int $id
 * @property int $user
 * @property float $amount valor total pago ou sacado
 * @property string $currenty se ele for nacional a moeda e R$  se não tudo em $
 * @property string|null $date_request data que foi realizado o saque
 * @property string $paid_in data de confirmação que foi realizado o pagamento ou investimentos
 * @property string $status
 * @property string $type
 * @property string $receipt recibo
 * @property string $month qual foi mês?
 * @property string $ano qual foi ano?
 * @property string $process qual foi processador escolhido
 * @property string $process_info informações extras do processador escolhido
 * @property string $transation_id ID da transação gerada no próprio site
 * @property string $number_id codigo via get para indentificação
 */
class Cashout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cashout';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'paid_in', 'status', 'type', 'receipt', 'month', 'ano', 'process', 'process_info', 'transation_id', 'number_id'], 'required'],
            [['user'], 'integer'],
            [['amount'], 'number'],
            [['currenty', 'status', 'type', 'receipt', 'month', 'ano', 'process_info', 'transation_id', 'number_id'], 'string'],
            [['date_request', 'paid_in'], 'string', 'max' => 250],
            [['process'], 'string', 'max' => 100],
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
            'amount' => Yii::t('app', 'Amount'),
            'currenty' => Yii::t('app', 'Currenty'),
            'date_request' => Yii::t('app', 'Date Request'),
            'paid_in' => Yii::t('app', 'Paid In'),
            'status' => Yii::t('app', 'Status'),
            'type' => Yii::t('app', 'Type'),
            'receipt' => Yii::t('app', 'Receipt'),
            'month' => Yii::t('app', 'Month'),
            'ano' => Yii::t('app', 'Ano'),
            'process' => Yii::t('app', 'Process'),
            'process_info' => Yii::t('app', 'Process Info'),
            'transation_id' => Yii::t('app', 'Transation ID'),
            'number_id' => Yii::t('app', 'Number ID'),
        ];
    }
}
