<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Company;

/**
 * SearchCompany represents the model behind the search form about `app\models\Company`.
 */
class SearchCompany extends Company
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'need_presentation', 'need_training', 'pay_agree', 'is_organisator', 'is_sponsor', 'order'], 'integer'],
            [['name', 'ideas', 'contact_person', 'telephone', 'e_mail', 'site', 'skype', 'logo_url', 'intro_uk', 'intro_ru', 'intro_en', 'facebook_profile', 'google_profile', 'linkedin_profile', 'vk_profile'], 'safe'],
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
        $query = Company::find();

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
            'need_presentation' => $this->need_presentation,
            'need_training' => $this->need_training,
            'pay_agree' => $this->pay_agree,
            'is_organisator' => $this->is_organisator,
            'is_sponsor' => $this->is_sponsor,
            'order' => $this->order,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'ideas', $this->ideas])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'e_mail', $this->e_mail])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'logo_url', $this->logo_url])
            ->andFilterWhere(['like', 'intro_uk', $this->intro_uk])
            ->andFilterWhere(['like', 'intro_ru', $this->intro_ru])
            ->andFilterWhere(['like', 'intro_en', $this->intro_en])
            ->andFilterWhere(['like', 'facebook_profile', $this->facebook_profile])
            ->andFilterWhere(['like', 'google_profile', $this->google_profile])
            ->andFilterWhere(['like', 'linkedin_profile', $this->linkedin_profile])
            ->andFilterWhere(['like', 'vk_profile', $this->vk_profile]);

        return $dataProvider;
    }
}
