<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adverts".
 *
 * @property int $id
 * @property string $name_ads
 * @property string $url
 * @property string $banner
 */
class Adverts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adverts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name_ads', 'url', 'banner'], 'required'],
            [['id'], 'integer'],
            [['url', 'banner'], 'string'],
            [['name_ads'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_ads' => Yii::t('app', 'Name Ads'),
            'url' => Yii::t('app', 'Url'),
            'banner' => Yii::t('app', 'Banner'),
        ];
    }
}
