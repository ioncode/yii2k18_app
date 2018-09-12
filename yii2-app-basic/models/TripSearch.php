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
    public function rules()
    {
        return [
            [['id', 'corporate_id', 'number', 'user_id', 'created_at', 'updated_at', 'coordination_at', 'saved_at', 'tag_le_id', 'trip_purpose_id', 'trip_purpose_parent_id', 'status'], 'integer'],
            [['trip_purpose_desc'], 'safe'],
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
        $query = Trip::find();

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

        return $dataProvider;
    }
}
