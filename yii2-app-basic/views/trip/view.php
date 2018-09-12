<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trip */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trip-view">

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
            'corporate_id',
            'number',
            'user_id',
            'created_at',
            'updated_at',
            'coordination_at',
            'saved_at',
            'tag_le_id',
            'trip_purpose_id',
            'trip_purpose_parent_id',
            'trip_purpose_desc:ntext',
            'status',
        ],
    ]) ?>

</div>
