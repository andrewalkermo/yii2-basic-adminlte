<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property int $called id da called
 * @property string $ask
 * @property string $answer
 * @property string $date_request
 * @property int $who fica id da conta que deu a resposta no caso admin e user
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['called', 'ask', 'answer', 'date_request', 'who'], 'required'],
            [['called', 'who'], 'integer'],
            [['ask', 'answer', 'date_request'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'called' => Yii::t('app', 'Called'),
            'ask' => Yii::t('app', 'Ask'),
            'answer' => Yii::t('app', 'Answer'),
            'date_request' => Yii::t('app', 'Date Request'),
            'who' => Yii::t('app', 'Who'),
        ];
    }
}
