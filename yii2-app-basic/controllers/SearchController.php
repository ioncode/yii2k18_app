<?php

namespace app\controllers;

use Yii;
use app\models\TripSearch;

class SearchController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new TripSearch();
		$params=Yii::$app->request->queryParams;
		$params['TripSearch']['corporate_id']=3;
		$params['TripSearch']['service']=2;
		if (!empty(Yii::$app->request->queryParams['search'])) {
			$params['TripSearch']['search']=Yii::$app->request->queryParams['search'];
			
			
		}
		$dataProvider = $searchModel->search($params);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'params' => Yii::$app->request->queryParams,
        ]);
    }

}
