<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FlightSegment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Flight Segments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flight-segment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'flight_id',
            'num',
            'group',
            'departureTerminal',
            'arrivalTerminal',
            'flightNumber',
            'departureDate',
            'arrivalDate',
            'stopNumber',
            'flightTime:datetime',
            'eTicket',
            'bookingClass',
            'bookingCode',
            'baggageValue',
            'baggageUnit',
            'depAirportId',
            'arrAirportId',
            'opCompanyId',
            'markCompanyId',
            'aircraftId',
            'depCityId',
            'arrCityId',
            'supplierRef',
            'depTimestamp:datetime',
            'arrTimestamp:datetime',
        ],
    ]) ?>

</div>
