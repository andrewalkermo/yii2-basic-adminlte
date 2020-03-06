<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Boleto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="boleto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'boletocode')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idTransacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expired')->textInput(['maxlength' => true]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
