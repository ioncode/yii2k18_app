<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TripService */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trip Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trip-service-view">

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
            'trip_id',
            'service_id',
            'status',
            'type_booking',
            'variants',
            'price',
            'currency',
            'confirmation_number',
            'deadline',
            'date_start',
            'date_end',
            'start_city_id',
            'start_point_id',
            'end_point_id',
            'end_city_id',
            'description:ntext',
        ],
    ]) ?>

</div>
