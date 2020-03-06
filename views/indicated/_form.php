<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Indicated */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicated-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ref')->textInput() ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'credited')->textInput() ?>

    <?= $form->field($model, 'refence_cpc')->textInput() ?>

    <?= $form->field($model, 'refence_cpm')->textInput() ?>

    <?= $form->field($model, 'commission_levels')->textInput() ?>

    <?= $form->field($model, 'recommendation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'wait' => 'Wait', 'suspended' => 'Suspended', ], ['prompt' => '']) ?>

    <div class="form-group" style="text-align: right;">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
