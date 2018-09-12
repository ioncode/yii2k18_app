<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trip */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'corporate_id')->textInput() ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'coordination_at')->textInput() ?>

    <?= $form->field($model, 'saved_at')->textInput() ?>

    <?= $form->field($model, 'tag_le_id')->textInput() ?>

    <?= $form->field($model, 'trip_purpose_id')->textInput() ?>

    <?= $form->field($model, 'trip_purpose_parent_id')->textInput() ?>

    <?= $form->field($model, 'trip_purpose_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
