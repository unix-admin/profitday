<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Person;

/**
 * PersonSearch represents the model behind the search form about `app\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'working_place', 'how_know_about', 'ideas', 'telephone', 'e_mail', 'skype', 'facebook_profile', 'google_profile', 'linkedin_profile', 'vk_profile'], 'safe'],
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
        $query = Person::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'working_place', $this->working_place])
            ->andFilterWhere(['like', 'how_know_about', $this->how_know_about])
            ->andFilterWhere(['like', 'ideas', $this->ideas])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'e_mail', $this->e_mail])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'facebook_profile', $this->facebook_profile])
            ->andFilterWhere(['like', 'google_profile', $this->google_profile])
            ->andFilterWhere(['like', 'linkedin_profile', $this->linkedin_profile])
            ->andFilterWhere(['like', 'vk_profile', $this->vk_profile]);

        return $dataProvider;
    }
}
