<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Catchthigh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catchthigh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'cookie')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reverse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_request')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'drops')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'clicks_pay')->textInput() ?>

    <?= $form->field($model, 'views_pay')->textInput() ?>

    <?= $form->field($model, 'browser')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_site')->textInput() ?>

    <?= $form->field($model, 'reference')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SO')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sequel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'state')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'city')->textarea(['rows' => 6]) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
