<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IndicatedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicated-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ref') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'credited') ?>

    <?= $form->field($model, 'refence_cpc') ?>

    <?php // echo $form->field($model, 'refence_cpm') ?>

    <?php // echo $form->field($model, 'commission_levels') ?>

    <?php // echo $form->field($model, 'recommendation') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
