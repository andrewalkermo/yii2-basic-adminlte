<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Called */

$this->title = Yii::t('app', 'Criar Called');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Calleds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="called-create box center-block box-primary" style="margin-top: 20px; padding: 20px">
    <div class="box-header with-border">
        <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
