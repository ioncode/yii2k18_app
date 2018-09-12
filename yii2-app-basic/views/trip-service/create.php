<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TripService */

$this->title = 'Create Trip Service';
$this->params['breadcrumbs'][] = ['label' => 'Trip Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trip-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
