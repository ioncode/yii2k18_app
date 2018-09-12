<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FlightSegment */

$this->title = 'Update Flight Segment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Flight Segments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="flight-segment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
