<?php

namespace app\modules\v1\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property string $model Марка
 * @property string $image Фотография
 * @property int $release_year Год выпуска
 * @property int $mileage Пробег
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 * @property string $url URL
 */
class Car extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'image', 'release_year', 'mileage'], 'required'],
            [['release_year', 'mileage'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['model', 'image', 'url'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Марка',
            'image' => 'Фотография',
            'release_year' => 'Год выпуска',
            'mileage' => 'Пробег',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
            'url' => 'URL',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors[] = [
            'class' => SluggableBehavior::class,
            'attribute' => 'model',
            'slugAttribute' => 'url'
        ];

        return $behaviors;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        return [
            'id' => $this->id,
            'model' => $this->model,
            'image' => $this->image,
            'release_year' => $this->release_year,
            'mileage' => $this->mileage,
            'createdAt' => $this->createdAt,
            'url' => $this->url
        ];
    }
}
