<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cashout */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cashout-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'currenty')->dropDownList([ 'BRL' => 'BRL', 'USD' => 'USD', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date_request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paid_in')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'fail' => 'Fail', 'wait' => 'Wait', 'done' => 'Done', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'withdraw' => 'Withdraw', 'pay' => 'Pay', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'receipt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'month')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ano')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'process')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'process_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'transation_id')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'number_id')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
