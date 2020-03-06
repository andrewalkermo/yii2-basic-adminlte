<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "security".
 *
 * @property int $id
 * @property int $user
 * @property string $pincode
 * @property string $ip
 * @property string $sys
 * @property string $browser
 * @property string $document
 */
class Security extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'security';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user', 'pincode', 'ip', 'sys', 'browser', 'document'], 'required'],
            [['id', 'user'], 'integer'],
            [['pincode', 'ip', 'sys', 'browser', 'document'], 'string'],
            [['id'], 'unique'],
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
            'pincode' => Yii::t('app', 'Pincode'),
            'ip' => Yii::t('app', 'Ip'),
            'sys' => Yii::t('app', 'Sys'),
            'browser' => Yii::t('app', 'Browser'),
            'document' => Yii::t('app', 'Document'),
        ];
    }
}
