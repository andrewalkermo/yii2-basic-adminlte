<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TimelineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timeline-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'cookie') ?>

    <?= $form->field($model, 'ip') ?>

    <?= $form->field($model, 'reverse') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'title_share') ?>

    <?php // echo $form->field($model, 'share') ?>

    <?php // echo $form->field($model, 'date_request') ?>

    <?php // echo $form->field($model, 'browser') ?>

    <?php // echo $form->field($model, 'SO') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
