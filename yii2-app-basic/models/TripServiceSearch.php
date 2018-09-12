<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TripService;

/**
 * TripServiceSearch represents the model behind the search form of `app\models\TripService`.
 */
class TripServiceSearch extends TripService
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'trip_id', 'service_id', 'status', 'type_booking', 'variants', 'deadline', 'date_start', 'date_end', 'start_city_id', 'start_point_id', 'end_point_id', 'end_city_id'], 'integer'],
            [['price'], 'number'],
            [['currency', 'confirmation_number', 'description'], 'safe'],
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
        $query = TripService::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'trip_id' => $this->trip_id,
            'service_id' => $this->service_id,
            'status' => $this->status,
            'type_booking' => $this->type_booking,
            'variants' => $this->variants,
            'price' => $this->price,
            'deadline' => $this->deadline,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'start_city_id' => $this->start_city_id,
            'start_point_id' => $this->start_point_id,
            'end_point_id' => $this->end_point_id,
            'end_city_id' => $this->end_city_id,
        ]);

        $query->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'confirmation_number', $this->confirmation_number])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
