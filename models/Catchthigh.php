<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catchthigh".
 *
 * @property int $id
 * @property int $user aqui fica usuario participando afiliados 
 * @property string $cookie um cookie de tempo cada 48 horas
 * @property string $ip
 * @property string $reverse
 * @property string $date_request data primeiro clique
 * @property string $drops quando contabilizar novamente mesmo ip date em geral em cada 48 horas
 * @property float $clicks_pay valor pago nesse clique
 * @property float $views_pay valor pago nesse view
 * @property string $browser
 * @property int $id_site
 * @property string $reference a url de refencia onde foi clicada
 * @property string $SO sistema operacional do visitante
 * @property string $sequel intervalos de data que esse mesmo usuario clicou
 * @property string $country
 * @property string $state
 * @property string $city
 */
class Catchthigh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catchthigh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'cookie', 'ip', 'reverse', 'date_request', 'drops', 'clicks_pay', 'browser', 'id_site', 'reference', 'SO', 'sequel', 'country', 'state', 'city'], 'required'],
            [['user', 'id_site'], 'integer'],
            [['cookie', 'ip', 'reverse', 'date_request', 'drops', 'browser', 'reference', 'SO', 'sequel', 'country', 'state', 'city'], 'string'],
            [['clicks_pay', 'views_pay'], 'number'],
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
            'cookie' => Yii::t('app', 'Cookie'),
            'ip' => Yii::t('app', 'Ip'),
            'reverse' => Yii::t('app', 'Reverse'),
            'date_request' => Yii::t('app', 'Date Request'),
            'drops' => Yii::t('app', 'Drops'),
            'clicks_pay' => Yii::t('app', 'Clicks Pay'),
            'views_pay' => Yii::t('app', 'Views Pay'),
            'browser' => Yii::t('app', 'Browser'),
            'id_site' => Yii::t('app', 'Id Site'),
            'reference' => Yii::t('app', 'Reference'),
            'SO' => Yii::t('app', 'So'),
            'sequel' => Yii::t('app', 'Sequel'),
            'country' => Yii::t('app', 'Country'),
            'state' => Yii::t('app', 'State'),
            'city' => Yii::t('app', 'City'),
        ];
    }
}
