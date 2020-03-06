<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Levels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="levels-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requirement_indications')->textInput() ?>

    <?= $form->field($model, 'requirement_interest')->textInput() ?>

    <?= $form->field($model, 'requirement_aplication')->textInput() ?>

    <?= $form->field($model, 'active_rent_referrals')->textInput() ?>

    <?= $form->field($model, 'active_paid_click')->textInput() ?>

    <?= $form->field($model, 'active_without_limit')->textInput() ?>

    <?= $form->field($model, 'active_special_reward')->textInput() ?>

    <?= $form->field($model, 'active_indication_levels')->textInput() ?>

    <?= $form->field($model, 'active_special_support')->textInput() ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
