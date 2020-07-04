<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class='col-sm-6'>
        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'confirmation_token')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'status')->textInput() ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'superadmin')->textInput() ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'created_at')->textInput() ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'updated_at')->textInput() ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'registration_ip')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'bind_to_ip')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-6'>
        <?= $form->field($model, 'email_confirmed')->textInput() ?>
    </div>

       <div class="col-sm-12">
           <div class="form-group" style="text-align: right;">
               <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
           </div>
       </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>