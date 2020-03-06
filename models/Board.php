<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "board".
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $text
 */
class Board extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'board';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'link', 'text'], 'required'],
            [['link', 'text'], 'string'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'link' => Yii::t('app', 'Link'),
            'text' => Yii::t('app', 'Text'),
        ];
    }
}
