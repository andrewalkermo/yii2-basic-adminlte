<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BoletoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="boleto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'boletocode') ?>

    <?= $form->field($model, 'idTransacao') ?>

    <?php // echo $form->field($model, 'youstatus') ?>

    <?php // echo $form->field($model, 'expired') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
