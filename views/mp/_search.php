<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'point') ?>

    <?= $form->field($model, 'ref') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'pass') ?>

    <?php // echo $form->field($model, 'lang') ?>

    <?php // echo $form->field($model, 'what') ?>

    <?php // echo $form->field($model, 'document') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'totalpay') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'plan_id') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'method') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'hostname') ?>

    <?php // echo $form->field($model, 'browser') ?>

    <?php // echo $form->field($model, 'SO') ?>

    <?php // echo $form->field($model, 'transation_id') ?>

    <?php // echo $form->field($model, 'number_id') ?>

    <?php // echo $form->field($model, 'status_data') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
