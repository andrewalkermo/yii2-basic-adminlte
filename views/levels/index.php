<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LevelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Levels');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="levels-index box center-block box-primary" style="margin-top: 20px">

    <div class="box-header with-border">
        <div class="row">
            <div class="col-sm-4" style=" margin-top: 25px">
            </div>
            <div class="col-sm-4">
                <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
            </div>
            <div class="col-sm-4" style="text-align: right; padding-right: 20px; margin-top: 25px">
                <?= Html::a(Yii::t('app', 'Criar Levels'), ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>
    <div class="table-responsive box-body" style="padding: 20px">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterSelector' => '#pageSize',
            'layout'=>'{summary}'.Html::activeDropDownList($searchModel, 'pageSize', [10 => 10, 20 => 20, 50 => 50, 100 => 100],['id' => 'pageSize', 'class'=>'form-control', 'style'=>'width:90px;' ]).'<br/>{items}<br/>{pager}',
            'filterModel' => $searchModel,
        'columns' => [
                        'id',
            'name',
            'requirement_indications',
            'requirement_interest',
            'requirement_aplication',
            //'active_rent_referrals',
            //'active_paid_click',
            //'active_without_limit',
            //'active_special_reward',
            //'active_indication_levels',
            //'active_special_support',

            [
            'class' => 'yii\grid\ActionColumn',
            'header' => 'Ações',
            'template' => '{view}&nbsp;{update}&nbsp;{delete}',
            'headerOptions' =>['style' => 'color: #3c8dbc; width:150px'],
            'buttons' => [
            'view' => function ($url, $model) { return Html::a('<i class="fa fa-eye" style="font-size: small;" aria-hidden="true"></i>', $url, ['class' => 'btn btn-sm btn-info', 'title' => Yii::t('yii', 'Detalhes'),]);},
            'update' => function ($url, $model) {return Html::a('<i class="fa fa-pencil-square-o" style="font-size: small;" aria-hidden="true"></i>', $url, ['class' => 'btn btn-sm btn-warning', 'title' => Yii::t('yii', 'Editar'),]);},
            'delete' => function ($url, $model) {return Html::a('<i class="fa fa-trash" style="font-size: small;" aria-hidden="true"></i>', $url, ['class' => 'btn btn-sm btn-danger', 'title' => Yii::t('yii', 'Deletar'), 'data' => ['confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),'method' => 'post']]);},
            ]
            ],        ],
            ]); ?>
                
    </div>
</div>
