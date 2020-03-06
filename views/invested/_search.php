<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvestedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invested-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_plan') ?>

    <?= $form->field($model, 'months') ?>

    <?= $form->field($model, 'crash') ?>

    <?= $form->field($model, 'min') ?>

    <?php // echo $form->field($model, 'max') ?>

    <?php // echo $form->field($model, 'reward') ?>

    <?php // echo $form->field($model, 'sitemax') ?>

    <?php // echo $form->field($model, 'afiliate') ?>

    <?php // echo $form->field($model, 'checkout') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
