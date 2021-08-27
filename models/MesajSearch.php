<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mesaj;

/**
 * MesajSearch represents the model behind the search form of `app\models\Mesaj`.
 */
class MesajSearch extends Mesaj
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['gonderen', 'baslik', 'icerik', 'tarih', 'dosya'], 'safe'],
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
        $query = Mesaj::find();

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
            'tarih' => $this->tarih,
        ]);

        $query->andFilterWhere(['like', 'gonderen', $this->gonderen])
            ->andFilterWhere(['like', 'baslik', $this->baslik])
            ->andFilterWhere(['like', 'icerik', $this->icerik])
            ->andFilterWhere(['like', 'dosya', $this->dosya]);

        return $dataProvider;
    }
}
