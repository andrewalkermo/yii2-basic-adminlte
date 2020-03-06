<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cards-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'card_number')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name_card')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'month')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'year')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pin')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_used')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'flag')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'transactionID')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
