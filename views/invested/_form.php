<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Invested */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invested-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'months')->textInput() ?>

    <?= $form->field($model, 'crash')->textInput() ?>

    <?= $form->field($model, 'min')->textInput() ?>

    <?= $form->field($model, 'max')->textInput() ?>

    <?= $form->field($model, 'reward')->textInput() ?>

    <?= $form->field($model, 'sitemax')->textInput() ?>

    <?= $form->field($model, 'afiliate')->textInput() ?>

    <?= $form->field($model, 'checkout')->textInput(['maxlength' => true]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
