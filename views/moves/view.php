<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Moves */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Moves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moves-view  box center-block box-primary" style="margin-top: 20px; padding: 20px">

    <div class="box-header with-border">
        <div class="row">
            <div class="col-sm-4" style=" margin-top: 25px">
            </div>
            <div class="col-sm-4">
                <h1 style="text-align: center"><?=   Yii::t('app', 'Moves') . ": " . Html::encode($this->title) ?></h1>
            </div>
            <div class="col-sm-4" style="text-align: right; padding-right: 20px; margin-top: 25px">
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
            'user',
            'date_move:ntext',
            'id_cash',
            'description:ntext',
            'status',
            'balance',
        ],
    ]) ?>
    </div>
</div>
