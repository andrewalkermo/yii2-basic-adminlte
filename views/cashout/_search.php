<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CashoutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cashout-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'currenty') ?>

    <?= $form->field($model, 'date_request') ?>

    <?php // echo $form->field($model, 'paid_in') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'receipt') ?>

    <?php // echo $form->field($model, 'month') ?>

    <?php // echo $form->field($model, 'ano') ?>

    <?php // echo $form->field($model, 'process') ?>

    <?php // echo $form->field($model, 'process_info') ?>

    <?php // echo $form->field($model, 'transation_id') ?>

    <?php // echo $form->field($model, 'number_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
