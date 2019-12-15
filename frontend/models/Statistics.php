<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "statistics".
 *
 * @property int $id
 * @property string $access_time
 * @property string $user_ip
 * @property string $user_host
 * @property string $query_string
 */
class Statistics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statistics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['access_time', 'user_ip', 'user_host', 'query_string'], 'required'],
            [['access_time'], 'safe'],
            [['user_ip'], 'string', 'max' => 20],
            [['user_host', 'query_string'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'access_time' => 'Access Time',
            'user_ip' => 'User Ip',
            'user_host' => 'User Host',
            'query_string' => 'Query String',
        ];
    }
}
