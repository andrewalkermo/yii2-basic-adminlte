<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mp".
 *
 * @property int $id
 * @property string $point esse chave de indentificação esta vinculado ao campo external_reference do mercadopago
 * @property string $ref
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $pass
 * @property string $lang
 * @property string $what
 * @property string $document
 * @property float $amount
 * @property float $totalpay
 * @property string $phone
 * @property int $plan_id
 * @property int $level
 * @property string $method
 * @property string $user
 * @property string $ip
 * @property string $hostname
 * @property string $browser
 * @property string $SO
 * @property string $transation_id
 * @property string $number_id
 * @property string $status_data se for verificado pq robo do mercadopago ja fez inset se não tiver vamos fazer manualmente
 */
class Mp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['point', 'ref', 'name', 'last_name', 'email', 'pass', 'lang', 'what', 'document', 'phone', 'plan_id', 'level', 'method', 'user', 'ip', 'hostname', 'browser', 'SO', 'transation_id', 'number_id'], 'required'],
            [['ref', 'lang', 'what', 'document', 'phone', 'method', 'user', 'ip', 'hostname', 'browser', 'SO', 'transation_id', 'number_id', 'status_data'], 'string'],
            [['amount', 'totalpay'], 'number'],
            [['plan_id', 'level'], 'integer'],
            [['point'], 'string', 'max' => 20],
            [['name', 'last_name', 'email'], 'string', 'max' => 100],
            [['pass'], 'string', 'max' => 18],
            [['point'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'point' => Yii::t('app', 'Point'),
            'ref' => Yii::t('app', 'Ref'),
            'name' => Yii::t('app', 'Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'pass' => Yii::t('app', 'Pass'),
            'lang' => Yii::t('app', 'Lang'),
            'what' => Yii::t('app', 'What'),
            'document' => Yii::t('app', 'Document'),
            'amount' => Yii::t('app', 'Amount'),
            'totalpay' => Yii::t('app', 'Totalpay'),
            'phone' => Yii::t('app', 'Phone'),
            'plan_id' => Yii::t('app', 'Plan ID'),
            'level' => Yii::t('app', 'Level'),
            'method' => Yii::t('app', 'Method'),
            'user' => Yii::t('app', 'User'),
            'ip' => Yii::t('app', 'Ip'),
            'hostname' => Yii::t('app', 'Hostname'),
            'browser' => Yii::t('app', 'Browser'),
            'SO' => Yii::t('app', 'So'),
            'transation_id' => Yii::t('app', 'Transation ID'),
            'number_id' => Yii::t('app', 'Number ID'),
            'status_data' => Yii::t('app', 'Status Data'),
        ];
    }
}
