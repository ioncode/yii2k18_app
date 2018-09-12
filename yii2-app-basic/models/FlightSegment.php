<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "flight_segment".
 *
 * @property int $id
 * @property int $flight_id
 * @property int $num
 * @property int $group
 * @property string $departureTerminal
 * @property string $arrivalTerminal
 * @property string $flightNumber
 * @property string $departureDate
 * @property string $arrivalDate
 * @property int $stopNumber
 * @property int $flightTime
 * @property int $eTicket
 * @property string $bookingClass
 * @property string $bookingCode
 * @property int $baggageValue
 * @property string $baggageUnit
 * @property int $depAirportId
 * @property int $arrAirportId
 * @property int $opCompanyId
 * @property int $markCompanyId
 * @property int $aircraftId
 * @property int $depCityId
 * @property int $arrCityId
 * @property string $supplierRef
 * @property int $depTimestamp
 * @property int $arrTimestamp
 */
class FlightSegment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flight_segment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flight_id', 'num', 'group'], 'required'],
            [['flight_id', 'num', 'group', 'stopNumber', 'flightTime', 'eTicket', 'baggageValue', 'depAirportId', 'arrAirportId', 'opCompanyId', 'markCompanyId', 'aircraftId', 'depCityId', 'arrCityId', 'depTimestamp', 'arrTimestamp'], 'integer'],
            [['departureTerminal', 'arrivalTerminal', 'bookingCode'], 'string', 'max' => 1],
            [['flightNumber'], 'string', 'max' => 6],
            [['departureDate', 'arrivalDate'], 'string', 'max' => 20],
            [['bookingClass', 'baggageUnit'], 'string', 'max' => 16],
            [['supplierRef'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'flight_id' => 'Flight ID',
            'num' => 'Num',
            'group' => 'Group',
            'departureTerminal' => 'Departure Terminal',
            'arrivalTerminal' => 'Arrival Terminal',
            'flightNumber' => 'Flight Number',
            'departureDate' => 'Departure Date',
            'arrivalDate' => 'Arrival Date',
            'stopNumber' => 'Stop Number',
            'flightTime' => 'Flight Time',
            'eTicket' => 'E Ticket',
            'bookingClass' => 'Booking Class',
            'bookingCode' => 'Booking Code',
            'baggageValue' => 'Baggage Value',
            'baggageUnit' => 'Baggage Unit',
            'depAirportId' => 'Dep Airport ID',
            'arrAirportId' => 'Arr Airport ID',
            'opCompanyId' => 'Op Company ID',
            'markCompanyId' => 'Mark Company ID',
            'aircraftId' => 'Aircraft ID',
            'depCityId' => 'Dep City ID',
            'arrCityId' => 'Arr City ID',
            'supplierRef' => 'Supplier Ref',
            'depTimestamp' => 'Dep Timestamp',
            'arrTimestamp' => 'Arr Timestamp',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FlightSegmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FlightSegmentQuery(get_called_class());
    }
}
