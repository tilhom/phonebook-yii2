<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="phone-index">

<h3>Phones</h3>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => null,
        //'showHeader' => false,
        'layout'=>"{items}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'number',
        ],
    ]); ?>

</div>
