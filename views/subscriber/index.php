<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\PhoneSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubscriberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subscribers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriber-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Subscriber', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        [
            'class' => 'kartik\grid\ExpandRowColumn',
            'value' => function ($model, $key, $index, $column) {

                return GridView::ROW_COLLAPSED;
            },

            'allowBatchToggle'=>true,
           'detail'=>function ($model, $key, $index, $column) {
                $searchModel = new PhoneSearch();
                $searchModel->subscriber_id = $model->id;
                $dataProvider= $searchModel->search(Yii::$app->request->queryParams);

                return Yii::$app->controller->renderPartial('_phones', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider
                    ]);
            },
            'detailOptions'=>[
                'class'=> 'kv-state-enable',
            ],

        ],
            'name',
            'birth_date',
            'notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
