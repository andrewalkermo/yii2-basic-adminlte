<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Paypal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paypal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'token')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'PayerID')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'status')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'itemNome')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'itemPreco')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'itemQnt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'itemTotal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'taxa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'transactionID')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
