<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Project;

/**
 * ProjectSearch represents the model behind the search form about `backend\models\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'project_member', 'project_rule'], 'integer'],
            [['project_code', 'project_name', 'project_list', 'project_file', 'project_doc', 'project_datetime'], 'safe'],
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
        $query = Project::find();

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
            'project_datetime' => $this->project_datetime,
            'project_member' => $this->project_member,
            'project_rule' => $this->project_rule,
        ]);

        $query->andFilterWhere(['like', 'project_code', $this->project_code])
            ->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'project_list', $this->project_list])
            ->andFilterWhere(['like', 'project_file', $this->project_file])
            ->andFilterWhere(['like', 'project_doc', $this->project_doc]);

        return $dataProvider;
    }
}
