<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FlightSegment;

/**
 * FlightSegmentSearch represents the model behind the search form of `app\models\FlightSegment`.
 */
class FlightSegmentSearch extends FlightSegment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'flight_id', 'num', 'group', 'stopNumber', 'flightTime', 'eTicket', 'baggageValue', 'depAirportId', 'arrAirportId', 'opCompanyId', 'markCompanyId', 'aircraftId', 'depCityId', 'arrCityId', 'depTimestamp', 'arrTimestamp'], 'integer'],
            [['departureTerminal', 'arrivalTerminal', 'flightNumber', 'departureDate', 'arrivalDate', 'bookingClass', 'bookingCode', 'baggageUnit', 'supplierRef'], 'safe'],
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
        $query = FlightSegment::find();

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
            'flight_id' => $this->flight_id,
            'num' => $this->num,
            'group' => $this->group,
            'stopNumber' => $this->stopNumber,
            'flightTime' => $this->flightTime,
            'eTicket' => $this->eTicket,
            'baggageValue' => $this->baggageValue,
            'depAirportId' => $this->depAirportId,
            'arrAirportId' => $this->arrAirportId,
            'opCompanyId' => $this->opCompanyId,
            'markCompanyId' => $this->markCompanyId,
            'aircraftId' => $this->aircraftId,
            'depCityId' => $this->depCityId,
            'arrCityId' => $this->arrCityId,
            'depTimestamp' => $this->depTimestamp,
            'arrTimestamp' => $this->arrTimestamp,
        ]);

        $query->andFilterWhere(['like', 'departureTerminal', $this->departureTerminal])
            ->andFilterWhere(['like', 'arrivalTerminal', $this->arrivalTerminal])
            ->andFilterWhere(['like', 'flightNumber', $this->flightNumber])
            ->andFilterWhere(['like', 'departureDate', $this->departureDate])
            ->andFilterWhere(['like', 'arrivalDate', $this->arrivalDate])
            ->andFilterWhere(['like', 'bookingClass', $this->bookingClass])
            ->andFilterWhere(['like', 'bookingCode', $this->bookingCode])
            ->andFilterWhere(['like', 'baggageUnit', $this->baggageUnit])
            ->andFilterWhere(['like', 'supplierRef', $this->supplierRef]);

        return $dataProvider;
    }
}
