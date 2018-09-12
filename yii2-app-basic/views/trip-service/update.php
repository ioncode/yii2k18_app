<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TripService */

$this->title = 'Update Trip Service: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trip Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trip-service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
