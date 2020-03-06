<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatchthighSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catchthigh-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'cookie') ?>

    <?= $form->field($model, 'ip') ?>

    <?= $form->field($model, 'reverse') ?>

    <?php // echo $form->field($model, 'date_request') ?>

    <?php // echo $form->field($model, 'drops') ?>

    <?php // echo $form->field($model, 'clicks_pay') ?>

    <?php // echo $form->field($model, 'views_pay') ?>

    <?php // echo $form->field($model, 'browser') ?>

    <?php // echo $form->field($model, 'id_site') ?>

    <?php // echo $form->field($model, 'reference') ?>

    <?php // echo $form->field($model, 'SO') ?>

    <?php // echo $form->field($model, 'sequel') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'city') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
