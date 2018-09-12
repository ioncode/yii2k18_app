<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FlightSegmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flight-segment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'flight_id') ?>

    <?= $form->field($model, 'num') ?>

    <?= $form->field($model, 'group') ?>

    <?= $form->field($model, 'departureTerminal') ?>

    <?php // echo $form->field($model, 'arrivalTerminal') ?>

    <?php // echo $form->field($model, 'flightNumber') ?>

    <?php // echo $form->field($model, 'departureDate') ?>

    <?php // echo $form->field($model, 'arrivalDate') ?>

    <?php // echo $form->field($model, 'stopNumber') ?>

    <?php // echo $form->field($model, 'flightTime') ?>

    <?php // echo $form->field($model, 'eTicket') ?>

    <?php // echo $form->field($model, 'bookingClass') ?>

    <?php // echo $form->field($model, 'bookingCode') ?>

    <?php // echo $form->field($model, 'baggageValue') ?>

    <?php // echo $form->field($model, 'baggageUnit') ?>

    <?php // echo $form->field($model, 'depAirportId') ?>

    <?php // echo $form->field($model, 'arrAirportId') ?>

    <?php // echo $form->field($model, 'opCompanyId') ?>

    <?php // echo $form->field($model, 'markCompanyId') ?>

    <?php // echo $form->field($model, 'aircraftId') ?>

    <?php // echo $form->field($model, 'depCityId') ?>

    <?php // echo $form->field($model, 'arrCityId') ?>

    <?php // echo $form->field($model, 'supplierRef') ?>

    <?php // echo $form->field($model, 'depTimestamp') ?>

    <?php // echo $form->field($model, 'arrTimestamp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
