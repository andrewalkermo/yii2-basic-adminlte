<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaypalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paypal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'token') ?>

    <?= $form->field($model, 'PayerID') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'itemNome') ?>

    <?php // echo $form->field($model, 'itemPreco') ?>

    <?php // echo $form->field($model, 'itemQnt') ?>

    <?php // echo $form->field($model, 'itemTotal') ?>

    <?php // echo $form->field($model, 'taxa') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'transactionID') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
