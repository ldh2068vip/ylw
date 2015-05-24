<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Zcyh;

/**
 * ZcyhSearch represents the model behind the search form about `app\models\Zcyh`.
 */
class ZcyhSearch extends Zcyh
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['uname', 'passwd', 'kickname', 'gavar', 'sex', 'birthday', 'email', 'hover', 'mz', 'addres', 'question', 'answer'], 'safe'],
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
        $query = Zcyh::find();

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
            'birthday' => $this->birthday,
        ]);

        $query->andFilterWhere(['like', 'uname', $this->uname])
            ->andFilterWhere(['like', 'passwd', $this->passwd])
            ->andFilterWhere(['like', 'kickname', $this->kickname])
            ->andFilterWhere(['like', 'gavar', $this->gavar])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'hover', $this->hover])
            ->andFilterWhere(['like', 'mz', $this->mz])
            ->andFilterWhere(['like', 'addres', $this->addres])
            ->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'answer', $this->answer]);

        return $dataProvider;
    }
}
