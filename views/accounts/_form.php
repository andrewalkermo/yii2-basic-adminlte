<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accounts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'invested')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'balance')->textInput() ?>

    <?= $form->field($model, 'myplan')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'suspended' => 'Suspended', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date_register')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'confirm_email')->textInput() ?>

    <?= $form->field($model, 'type_payout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_pay')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'last_login')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'check_nivel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document_country')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
