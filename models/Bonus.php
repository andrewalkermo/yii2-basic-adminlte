<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bonus".
 *
 * @property int $id
 * @property string $name
 * @property string $descr
 * @property float $remuneration
 * @property int $exclusive (0) não (1) sim , e uma remuneração exclusiva ?? alguma função oculta ??
 */
class Bonus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bonus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'descr'], 'required'],
            [['descr'], 'string'],
            [['remuneration'], 'number'],
            [['exclusive'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'descr' => Yii::t('app', 'Descr'),
            'remuneration' => Yii::t('app', 'Remuneration'),
            'exclusive' => Yii::t('app', 'Exclusive'),
        ];
    }
}
