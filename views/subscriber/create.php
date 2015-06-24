<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subscriber */

$this->title = 'Create Subscriber';
$this->params['breadcrumbs'][] = ['label' => 'Subscribers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriber-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsPhone'=>$modelsPhone,
    ]) ?>

</div>
