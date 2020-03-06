<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'total_received') ?>

    <?= $form->field($model, 'total_interest') ?>

    <?= $form->field($model, 'total_drawn') ?>

    <?php // echo $form->field($model, 'balance_referent') ?>

    <?php // echo $form->field($model, 'total_deposit') ?>

    <?php // echo $form->field($model, 'referral_bonus') ?>

    <?php // echo $form->field($model, 'other_earnings') ?>

    <?php // echo $form->field($model, 'earningsclick') ?>

    <?php // echo $form->field($model, 'earningsviews') ?>

    <?php // echo $form->field($model, 'ads_referral') ?>

    <?php // echo $form->field($model, 'commissions_referral') ?>

    <?php // echo $form->field($model, 'what_month') ?>

    <?php // echo $form->field($model, 'last_updates') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
