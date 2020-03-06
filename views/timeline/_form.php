<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Timeline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timeline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'cookie')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reverse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icon')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_share')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'share')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_request')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'browser')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SO')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
