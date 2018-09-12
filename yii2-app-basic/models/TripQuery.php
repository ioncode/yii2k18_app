<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Trip]].
 *
 * @see Trip
 */
class TripQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Trip[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Trip|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
