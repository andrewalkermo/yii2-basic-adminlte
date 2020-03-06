<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $country País dele isso não muda ,e para sempre apos registro , sele ele nacional (R$) ou internacional ($)
 * @property float $invested
 * @property string $name
 * @property string $phone
 * @property float $balance
 * @property int $myplan
 * @property int $type se admin (0) ou usuario (1)
 * @property string $status
 * @property string $date_register
 * @property int $confirm_email
 * @property string $type_payout preferencia do modo de pagamento
 * @property string $for_pay
 * @property string $last_login
 * @property int $level nivel  do usuario do bronze ao hero
 * @property string $check_nivel a proxima data para chegar  se ele pode manter nível atual
 * @property string $document_country documento do país de origem dele no brasil e cpf
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'country', 'name', 'phone', 'status', 'date_register', 'confirm_email', 'type_payout', 'for_pay', 'last_login', 'check_nivel', 'document_country'], 'required'],
            [['country', 'phone', 'status', 'date_register', 'for_pay', 'last_login', 'check_nivel', 'document_country'], 'string'],
            [['invested', 'balance'], 'number'],
            [['myplan', 'type', 'confirm_email', 'level'], 'integer'],
            [['username'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 150],
            [['password', 'name'], 'string', 'max' => 100],
            [['type_payout'], 'string', 'max' => 25],
            [['email'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'country' => Yii::t('app', 'Country'),
            'invested' => Yii::t('app', 'Invested'),
            'name' => Yii::t('app', 'Name'),
            'phone' => Yii::t('app', 'Phone'),
            'balance' => Yii::t('app', 'Balance'),
            'myplan' => Yii::t('app', 'Myplan'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
            'date_register' => Yii::t('app', 'Date Register'),
            'confirm_email' => Yii::t('app', 'Confirm Email'),
            'type_payout' => Yii::t('app', 'Type Payout'),
            'for_pay' => Yii::t('app', 'For Pay'),
            'last_login' => Yii::t('app', 'Last Login'),
            'level' => Yii::t('app', 'Level'),
            'check_nivel' => Yii::t('app', 'Check Nivel'),
            'document_country' => Yii::t('app', 'Document Country'),
        ];
    }
}
