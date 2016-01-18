<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Content;

/**
 * ContentSearch represents the model behind the search form about `app\models\Content`.
 */
class ContentSearch extends Content
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['title_uk', 'title_ru', 'title_en', 'content_uk', 'content_ru', 'content_en', 'tags_uk', 'tags_ru', 'tags_en', 'type'], 'safe'],
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
        $query = Content::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title_uk', $this->title_uk])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'content_uk', $this->content_uk])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'tags_uk', $this->tags_uk])
            ->andFilterWhere(['like', 'tags_ru', $this->tags_ru])
            ->andFilterWhere(['like', 'tags_en', $this->tags_en])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
