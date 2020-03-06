<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Security */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="security-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'pincode')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sys')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'browser')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
