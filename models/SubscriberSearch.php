<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subscriber;

/**
 * SubscriberSearch represents the model behind the search form about `app\models\Subscriber`.
 */
class SubscriberSearch extends Subscriber
{
    /**
     * @inheritdoc
     */
    
    public $globalSearch;

    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['name', 'globalSearch','birth_date', 'notes'], 'safe'],
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
        $query = Subscriber::find();

        $query->leftJoin('phone', 'phone.subscriber_id = subscriber.id');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
/*echo "<pre>";
print_r($query);
print_r($dataProvider);
die;*/
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->orFilterWhere([
            'user_id' => Yii::$app->user->getId(),
            'birth_date' => $this->globalSearch,
        ]);

        $query->orFilterWhere([
            "phone.number" => $this->globalSearch,
        ]);

        $query->orFilterWhere(['like', 'name', $this->globalSearch])
            ->orFilterWhere(['like', 'notes', $this->globalSearch]);

        return $dataProvider;
    }

     public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['subscriber_id' => 'id']);
    }
}
