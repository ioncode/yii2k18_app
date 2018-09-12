<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Airport]].
 *
 * @see Airport
 */
class AirportQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Airport[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Airport|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
