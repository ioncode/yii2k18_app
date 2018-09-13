<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trip;

/**
 * TripSearch represents the model behind the search form of `app\models\Trip`.
 */
class TripSearch extends Trip
{
    /**
     * {@inheritdoc}
     */
	 
	// lets store params
	public $service;
	public $search;
	
	
	
	
    public function rules()
    {
        return [
            [['id', 'corporate_id', 'number', 'user_id', 'created_at', 'updated_at', 'coordination_at', 'saved_at', 'tag_le_id', 'trip_purpose_id', 'trip_purpose_parent_id', 'status', 'service'], 'integer'],
            [['trip_purpose_desc'], 'safe'],
			[['search'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {	
		$this->load($params);
        $query = Trip::find();
		
		// add conditions that should always apply here
		if ($this->service) {
			$query->joinWith('tripServices')->onCondition(['service_id' => $this->service]);
			if ($this->search) {
				$query->leftJoin(FlightSegment::tableName(), 'flight_id = '.TripService::tableName().'.id')
						->leftJoin(Airport::tableName(), 'airport_id = depAirportId')
						// 2,2 ms on test base 
						->andWhere([Airport::tableName().'.value' => $this->search])
						// 8,5 ms in same env
						//->where(['like', Airport::tableName().'.value', $this->search])
						// optimization to prevent fullscan: added depAirportId index, count time reduced to 1.6 ms 
				;
			}
			
		}
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);  

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            //'id' => $this->id,
            'corporate_id' => $this->corporate_id,
            'number' => $this->number,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'coordination_at' => $this->coordination_at,
            'saved_at' => $this->saved_at,
            'tag_le_id' => $this->tag_le_id,
            'trip_purpose_id' => $this->trip_purpose_id,
            'trip_purpose_parent_id' => $this->trip_purpose_parent_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'trip_purpose_desc', $this->trip_purpose_desc]);
		
		
		
		
		
		//$query->andFilterWhere(['IN', 'tripServices', [88]]);

        return $dataProvider;
    }
}
