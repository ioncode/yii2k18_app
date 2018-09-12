<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TripService */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trip-service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trip_id')->textInput() ?>

    <?= $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'type_booking')->textInput() ?>

    <?= $form->field($model, 'variants')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmation_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deadline')->textInput() ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

    <?= $form->field($model, 'start_city_id')->textInput() ?>

    <?= $form->field($model, 'start_point_id')->textInput() ?>

    <?= $form->field($model, 'end_point_id')->textInput() ?>

    <?= $form->field($model, 'end_city_id')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
