<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "affiliates".
 *
 * @property int $id
 * @property int $user
 * @property string $urlsite
 * @property int $status (0) em espera (1) ativo  (2) suspenso
 * @property int $type canal (0) site (1), aplicativo (2)
 */
class Affiliates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'affiliates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'urlsite', 'status'], 'required'],
            [['user', 'status', 'type'], 'integer'],
            [['urlsite'], 'string'],
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
            'urlsite' => Yii::t('app', 'Urlsite'),
            'status' => Yii::t('app', 'Status'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
