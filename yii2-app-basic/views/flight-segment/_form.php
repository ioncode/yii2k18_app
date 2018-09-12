<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FlightSegment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flight-segment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'flight_id')->textInput() ?>

    <?= $form->field($model, 'num')->textInput() ?>

    <?= $form->field($model, 'group')->textInput() ?>

    <?= $form->field($model, 'departureTerminal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrivalTerminal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flightNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departureDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arrivalDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stopNumber')->textInput() ?>

    <?= $form->field($model, 'flightTime')->textInput() ?>

    <?= $form->field($model, 'eTicket')->textInput() ?>

    <?= $form->field($model, 'bookingClass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookingCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baggageValue')->textInput() ?>

    <?= $form->field($model, 'baggageUnit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depAirportId')->textInput() ?>

    <?= $form->field($model, 'arrAirportId')->textInput() ?>

    <?= $form->field($model, 'opCompanyId')->textInput() ?>

    <?= $form->field($model, 'markCompanyId')->textInput() ?>

    <?= $form->field($model, 'aircraftId')->textInput() ?>

    <?= $form->field($model, 'depCityId')->textInput() ?>

    <?= $form->field($model, 'arrCityId')->textInput() ?>

    <?= $form->field($model, 'supplierRef')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depTimestamp')->textInput() ?>

    <?= $form->field($model, 'arrTimestamp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
