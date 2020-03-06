<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LevelsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="levels-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'requirement_indications') ?>

    <?= $form->field($model, 'requirement_interest') ?>

    <?= $form->field($model, 'requirement_aplication') ?>

    <?php // echo $form->field($model, 'active_rent_referrals') ?>

    <?php // echo $form->field($model, 'active_paid_click') ?>

    <?php // echo $form->field($model, 'active_without_limit') ?>

    <?php // echo $form->field($model, 'active_special_reward') ?>

    <?php // echo $form->field($model, 'active_indication_levels') ?>

    <?php // echo $form->field($model, 'active_special_support') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
