<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FlightSegment */

$this->title = 'Create Flight Segment';
$this->params['breadcrumbs'][] = ['label' => 'Flight Segments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flight-segment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
