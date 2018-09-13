<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TripSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trips Search by trip.coprorate_id = 3, trip_service.service_id = 2 & airport from GET parameter, named "search"';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>search/index</h1>
	
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'options' => [
			'class' => 'viva'
		],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'corporate_id',
            'number',
            'user_id',
            'created_at:datetime',
            'updated_at:datetime',
            'coordination_at',
            'saved_at',
            'tag_le_id',
            'trip_purpose_id',
            'trip_purpose_parent_id',
            'trip_purpose_desc:ntext',
            'status',
			
			//created additional fileds, uncomment if needed
		/* 	[
			 'attribute' => 'tripServices count',
			 'value' =>  function ($model) {

					$components = \yii\helpers\ArrayHelper::map($model->tripServices, 'id', 'trip_id');
					
					//counter with link to view 
					if ($components) {
						return Html::a(count($components), ['/trip-service', 'TripServiceSearch[trip_id]' => reset($components)]);
						
					}
					return;
					//list 			
					$components = array_map(function ($id, $name) {

						return Html::a($name, ['/component/view', 'id' => $id]);

					}, array_keys($components), $components);
						
					return implode(', ', $components);

				},

				'format' => 'raw'
			], */

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<hr>