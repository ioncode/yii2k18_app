<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TripServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trip-service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'trip_id') ?>

    <?= $form->field($model, 'service_id') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'type_booking') ?>

    <?php // echo $form->field($model, 'variants') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'confirmation_number') ?>

    <?php // echo $form->field($model, 'deadline') ?>

    <?php // echo $form->field($model, 'date_start') ?>

    <?php // echo $form->field($model, 'date_end') ?>

    <?php // echo $form->field($model, 'start_city_id') ?>

    <?php // echo $form->field($model, 'start_point_id') ?>

    <?php // echo $form->field($model, 'end_point_id') ?>

    <?php // echo $form->field($model, 'end_city_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
