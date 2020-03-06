<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "called".
 *
 * @property int $id
 * @property int $user obrigatorio apenas para membros longados o visitante sera 0 por padrão
 * @property string $ask
 * @property string $answer
 * @property int $status status 0 aberto , 1  respondido , 2 resposta cliente ,3 fechado
 * @property string $email_return para usuarios sem conta
 * @property string $protocol
 * @property string $date_open
 * @property string $speed velocidade atendimento e tipo de atendimento
 */
class Called extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'called';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'ask', 'answer', 'status', 'email_return', 'protocol', 'date_open'], 'required'],
            [['user', 'status'], 'integer'],
            [['ask', 'answer', 'email_return', 'protocol', 'date_open', 'speed'], 'string'],
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
            'ask' => Yii::t('app', 'Ask'),
            'answer' => Yii::t('app', 'Answer'),
            'status' => Yii::t('app', 'Status'),
            'email_return' => Yii::t('app', 'Email Return'),
            'protocol' => Yii::t('app', 'Protocol'),
            'date_open' => Yii::t('app', 'Date Open'),
            'speed' => Yii::t('app', 'Speed'),
        ];
    }
}
