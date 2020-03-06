<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'point')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ref')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pass')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'what')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'totalpay')->textInput() ?>

    <?= $form->field($model, 'phone')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan_id')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'method')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hostname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'browser')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SO')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'transation_id')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'number_id')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status_data')->dropDownList([ 'Verified' => 'Verified', 'Un-verified' => 'Un-verified', ], ['prompt' => '']) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
