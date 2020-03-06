<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CalledSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="called-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'ask') ?>

    <?= $form->field($model, 'answer') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'email_return') ?>

    <?php // echo $form->field($model, 'protocol') ?>

    <?php // echo $form->field($model, 'date_open') ?>

    <?php // echo $form->field($model, 'speed') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
