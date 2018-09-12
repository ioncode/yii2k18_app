<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[FlightSegment]].
 *
 * @see FlightSegment
 */
class FlightSegmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return FlightSegment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return FlightSegment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
