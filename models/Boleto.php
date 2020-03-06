<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boleto".
 *
 * @property int $id
 * @property int $user
 * @property string $link
 * @property string $boletocode
 * @property string $idTransacao
 * @property string $youstatus
 * @property string $expired
 */
class Boleto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'boleto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'link', 'boletocode', 'idTransacao', 'youstatus', 'expired'], 'required'],
            [['user'], 'integer'],
            [['link', 'boletocode'], 'string'],
            [['idTransacao', 'youstatus', 'expired'], 'string', 'max' => 100],
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
            'link' => Yii::t('app', 'Link'),
            'boletocode' => Yii::t('app', 'Boletocode'),
            'idTransacao' => Yii::t('app', 'Id Transacao'),
            'youstatus' => Yii::t('app', 'Youstatus'),
            'expired' => Yii::t('app', 'Expired'),
        ];
    }
}
