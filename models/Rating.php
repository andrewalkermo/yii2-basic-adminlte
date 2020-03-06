<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rating".
 *
 * @property int $id
 * @property int $user
 * @property string $txt
 * @property int $status
 * @property string $data
 */
class Rating extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'txt', 'status', 'data'], 'required'],
            [['user', 'status'], 'integer'],
            [['txt', 'data'], 'string'],
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
            'txt' => Yii::t('app', 'Txt'),
            'status' => Yii::t('app', 'Status'),
            'data' => Yii::t('app', 'Data'),
        ];
    }
}
