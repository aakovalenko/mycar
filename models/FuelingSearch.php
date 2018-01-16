<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fueling;

/**
 * FuelingSearch represents the model behind the search form of `app\models\Fueling`.
 */
class FuelingSearch extends Fueling
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'iron_horse_id', 'date', 'fuel_type', 'mileage'], 'integer'],
            [['price_per_liter', 'liters'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Fueling::find();

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
            'iron_horse_id' => $this->iron_horse_id,
            'date' => $this->date,
            'fuel_type' => $this->fuel_type,
            'price_per_liter' => $this->price_per_liter,
            'liters' => $this->liters,
            'mileage' => $this->mileage,
        ]);

        return $dataProvider;
    }
}
