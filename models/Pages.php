<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $type
 * @property string $title
 * @property string $html
 * @property string $us_title
 * @property string $us_html a versão da mesma pagina em inglês
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'title', 'html', 'us_title', 'us_html'], 'required'],
            [['html', 'us_html'], 'string'],
            [['type'], 'string', 'max' => 100],
            [['title', 'us_title'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Type'),
            'title' => Yii::t('app', 'Title'),
            'html' => Yii::t('app', 'Html'),
            'us_title' => Yii::t('app', 'Us Title'),
            'us_html' => Yii::t('app', 'Us Html'),
        ];
    }
}
