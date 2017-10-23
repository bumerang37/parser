<?php

namespace maksclub\parser\search;

use maksclub\parser\forms\VideoForm;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use maksclub\parser\entities\Video;

/**
 * VideoSearch represents the model behind the search form of `maksclub\parser\models\Video`.
 */
class VideoSearch extends VideoForm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['video_id', 'service', 'title', 'body', 'embed_code', 'url', 'large_thumbnail'], 'safe'],
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
        $query = Video::find();

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
        ]);

        $query->andFilterWhere(['like', 'video_id', $this->video_id])
            ->andFilterWhere(['like', 'service', $this->service])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'embed_code', $this->embed_code])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'large_thumbnail', $this->large_thumbnail])
            ->andFilterWhere(['like', 'small_thumbnail', $this->small_thumbnail]);

        return $dataProvider;
    }
}
