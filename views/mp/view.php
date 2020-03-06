<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mp */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mp'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mp-view  box center-block box-primary" style="margin-top: 20px; padding: 20px">

    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4" style=" margin-top: 25px">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h1 style="text-align: center"><?=   Yii::t('app', 'Mp') . ": " . Html::encode($this->title) ?></h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4" style="text-align: right; padding-right: 20px; margin-top: 25px">
                <?= Html::a(Yii::t('app', 'Editar'), ['update', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
                <?= Html::a(Yii::t('app', 'Deletar'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
                ],
                ]) ?>
            </div>
        </div>

    </div>

    <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'point',
            'ref:ntext',
            'name',
            'last_name',
            'email:email',
            'pass',
            'lang:ntext',
            'what:ntext',
            'document:ntext',
            'amount',
            'totalpay',
            'phone:ntext',
            'plan_id',
            'level',
            'method:ntext',
            'user:ntext',
            'ip:ntext',
            'hostname:ntext',
            'browser:ntext',
            'SO:ntext',
            'transation_id:ntext',
            'number_id:ntext',
            'status_data',
        ],
    ]) ?>
    </div>
</div>
