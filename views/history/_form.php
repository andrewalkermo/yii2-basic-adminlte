<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\History */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'total_received')->textInput() ?>

    <?= $form->field($model, 'total_interest')->textInput() ?>

    <?= $form->field($model, 'total_drawn')->textInput() ?>

    <?= $form->field($model, 'balance_referent')->textInput() ?>

    <?= $form->field($model, 'total_deposit')->textInput() ?>

    <?= $form->field($model, 'referral_bonus')->textInput() ?>

    <?= $form->field($model, 'other_earnings')->textInput() ?>

    <?= $form->field($model, 'earningsclick')->textInput() ?>

    <?= $form->field($model, 'earningsviews')->textInput() ?>

    <?= $form->field($model, 'ads_referral')->textInput() ?>

    <?= $form->field($model, 'commissions_referral')->textInput() ?>

    <?= $form->field($model, 'what_month')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'last_updates')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'start_date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'end_date')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
