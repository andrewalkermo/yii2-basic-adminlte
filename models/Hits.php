<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hits".
 *
 * @property int $id
 * @property int $user
 * @property int $id_site
 * @property float $clicks
 * @property float $views
 * @property string $date_request o total nesse dia
 */
class Hits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'id_site', 'clicks', 'views', 'date_request'], 'required'],
            [['user', 'id_site'], 'integer'],
            [['clicks', 'views'], 'number'],
            [['date_request'], 'string'],
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
            'id_site' => Yii::t('app', 'Id Site'),
            'clicks' => Yii::t('app', 'Clicks'),
            'views' => Yii::t('app', 'Views'),
            'date_request' => Yii::t('app', 'Date Request'),
        ];
    }
}
