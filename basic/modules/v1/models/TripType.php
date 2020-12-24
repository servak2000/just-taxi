<?php

namespace app\modules\v1\models;

use app\modules\v1\models\BaseModel;
use Yii;

/**
 * This is the model class for table "trips_types".
 *
 * @property int $id
 * @property string $name Название
 * @property int $max_price Максимальная цена
 * @property string $description Описание
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 */
class TripType extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trips_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'max_price', 'description'], 'required'],
            [['max_price'], 'integer'],
            [['description'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'max_price' => 'Максимальная цена',
            'description' => 'Описание',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }
}
