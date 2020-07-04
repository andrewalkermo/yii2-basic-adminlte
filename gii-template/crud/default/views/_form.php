<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(); ?>
<div class="row">
    <?php foreach ($generator->getColumnNames() as $attribute) {
        if (in_array($attribute, $safeAttributes)) {
            echo "    <div class='col-sm-6'>\n";
            echo "        <?= " . $generator->generateActiveField($attribute) . " ?>\n";
            echo "    </div>\n\n";
        }
    } ?>
       <div class="col-sm-12">
           <div class="form-group" style="text-align: right;">
               <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Salvar') ?>, ['class' => 'btn btn-success']) ?>
           </div>
       </div>

        <?= "<?php " ?>ActiveForm::end(); ?>

    </div>
</div>