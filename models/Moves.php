<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moves".
 *
 * @property int $id
 * @property int $user
 * @property string $date_move Quando foi processado?
 * @property int $id_cash id da cash com data de confirmação do pagamento
 * @property string $description o que exatamente ?? (Sacar),(Adição de fundos),(Pagamento de juros) ,(Pagamento de publicidade ...
 * @property int $status (1) pago (2) processando (3) cancelado (4) rembolsado (5) aguardando
 * @property float $balance saldo referente movimentação
 */
class Moves extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'moves';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'date_move', 'id_cash', 'description', 'status'], 'required'],
            [['user', 'id_cash', 'status'], 'integer'],
            [['date_move', 'description'], 'string'],
            [['balance'], 'number'],
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
            'date_move' => Yii::t('app', 'Date Move'),
            'id_cash' => Yii::t('app', 'Id Cash'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'balance' => Yii::t('app', 'Balance'),
        ];
    }
}
