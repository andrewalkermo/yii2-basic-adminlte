<?php

use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index box center-block box-primary" style="margin-top: 20px">

    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4" style=" margin-top: 25px">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h1 style="text-align: center"><?= "<?= " ?>Html::encode($this->title) ?></h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4" style="text-align: right; padding-right: 20px; margin-top: 25px">
                <?= "<?= " ?>Html::a(<?= $generator->generateString('Criar ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>
    <div class="table-responsive box-body" style="padding: 20px">
        <?= $generator->enablePjax ? "    <?php Pjax::begin(); ?>\n" : '' ?>
        <?php if(!empty($generator->searchModelClass)): ?>
            <?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
        <?php endif; ?>

        <?php if ($generator->indexWidgetType === 'grid'): ?>
            <?= "<?= " ?>GridView::widget([
            'dataProvider' => $dataProvider,
            'filterSelector' => '#pageSize',
            'layout'=>'{summary}'.Html::activeDropDownList($searchModel, 'pageSize', [10 => 10, 20 => 20, 50 => 50, 100 => 100],['id' => 'pageSize', 'class'=>'form-control', 'style'=>'width:90px;' ]).'<br/>{items}<br/>{pager}',
            <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            <?php
            $count = 0;
            if (($tableSchema = $generator->getTableSchema()) === false) {
                foreach ($generator->getColumnNames() as $name) {
                    if (++$count < 6) {
                        echo "            '" . $name . "',\n";
                    } else {
                        echo "            //'" . $name . "',\n";
                    }
                }
            } else {
                foreach ($tableSchema->columns as $column) {
                    $format = $generator->generateColumnFormat($column);
                    if (++$count < 6) {
                        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                    } else {
                        echo "            //'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                    }
                }
            }
            ?>

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
        <?php else: ?>
            <?= "<?= " ?>ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
            },
            ]) ?>
        <?php endif; ?>
        <?= $generator->enablePjax ? "    <?php Pjax::end(); ?>\n" : '' ?>

    </div>
</div>
