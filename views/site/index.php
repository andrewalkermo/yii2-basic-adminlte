<?php

use yii\data\ArrayDataProvider;
use yii\db\Query;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
$query = new Query;

$tabelas = [
    ['tabela' => 'accounts', 'registros' => $query->select('*') ->from('accounts')->count()],
    ['tabela' => 'adverts', 'registros' => $query->select('*') ->from('adverts')->count()],
    ['tabela' => 'affiliates', 'registros' => $query->select('*') ->from('affiliates')->count()],
    ['tabela' => 'answers', 'registros' => $query->select('*') ->from('answers')->count()],
    ['tabela' => 'board', 'registros' => $query->select('*') ->from('board')->count()],
    ['tabela' => 'boleto', 'registros' => $query->select('*') ->from('boleto')->count()],
    ['tabela' => 'bonus', 'registros' => $query->select('*') ->from('bonus')->count()],
    ['tabela' => 'called', 'registros' => $query->select('*') ->from('called')->count()],
    ['tabela' => 'cards', 'registros' => $query->select('*') ->from('cards')->count()],
    ['tabela' => 'cashout', 'registros' => $query->select('*') ->from('cashout')->count()],
    ['tabela' => 'catchthigh', 'registros' => $query->select('*') ->from('catchthigh')->count()],
    ['tabela' => 'history', 'registros' => $query->select('*') ->from('history')->count()],
    ['tabela' => 'hits', 'registros' => $query->select('*') ->from('hits')->count()],
    ['tabela' => 'indicated', 'registros' => $query->select('*') ->from('indicated')->count()],
    ['tabela' => 'invested', 'registros' => $query->select('*') ->from('invested')->count()],
    ['tabela' => 'levels', 'registros' => $query->select('*') ->from('levels')->count()],
    ['tabela' => 'moves', 'registros' => $query->select('*') ->from('moves')->count()],
    ['tabela' => 'mp', 'registros' => $query->select('*') ->from('mp')->count()],
    ['tabela' => 'pages', 'registros' => $query->select('*') ->from('pages')->count()],
    ['tabela' => 'paypal', 'registros' => $query->select('*') ->from('paypal')->count()],
    ['tabela' => 'rating', 'registros' => $query->select('*') ->from('rating')->count()],
    ['tabela' => 'security', 'registros' => $query->select('*') ->from('security')->count()],
    ['tabela' => 'timeline', 'registros' => $query->select('*') ->from('timeline')->count()],
];
$provider = new ArrayDataProvider([
    'allModels' => $tabelas,
    'pagination' => [
        'pageSize' =>  25,
    ],
]);
?>

<div class="site-index box center-block box-primary" style="margin-top: 20px; width: 80%">

    <div class="box-header with-border">
        <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="table-responsive box-body" style="padding: 20px">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $provider,
            'columns' => [
                'tabela',
                'registros',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Ações',
                    'template' => '{update}',
                    'headerOptions' =>['style' => 'color: #3c8dbc; width:50px'],
                    'buttons' => [
                        'update' => function ($url, $model) {return Html::a('<i class="fa fa-pencil-square-o" style="font-size: small;" aria-hidden="true"></i>', \yii\helpers\Url::to($model['tabela']), ['class' => 'btn btn-sm btn-warning', 'title' => Yii::t('yii', 'Editar'),]);},
                    ]
                ],        ],
        ]); ?>

    </div>
</div>
