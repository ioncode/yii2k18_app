<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Airport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="airport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'airport_id')->textInput() ?>

    <?= $form->field($model, 'language_id')->textInput() ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
