<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "timeline".
 *
 * @property int $id
 * @property int $user
 * @property string $cookie ultimo cookie dele
 * @property string $ip
 * @property string $reverse
 * @property string $icon
 * @property string $title_share
 * @property string $share
 * @property string $date_request
 * @property string $browser
 * @property string $SO
 */
class Timeline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timeline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'cookie', 'ip', 'reverse', 'icon', 'title_share', 'share', 'date_request', 'browser', 'SO'], 'required'],
            [['user'], 'integer'],
            [['cookie', 'ip', 'reverse', 'icon', 'title_share', 'share', 'date_request', 'browser', 'SO'], 'string'],
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
            'icon' => Yii::t('app', 'Icon'),
            'title_share' => Yii::t('app', 'Title Share'),
            'share' => Yii::t('app', 'Share'),
            'date_request' => Yii::t('app', 'Date Request'),
            'browser' => Yii::t('app', 'Browser'),
            'SO' => Yii::t('app', 'So'),
        ];
    }
}
