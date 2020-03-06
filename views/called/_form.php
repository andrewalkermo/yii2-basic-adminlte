<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Called */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="called-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'ask')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'email_return')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'protocol')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_open')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'speed')->dropDownList([ 'urgent' => 'Urgent', 'regular' => 'Regular', ], ['prompt' => '']) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
