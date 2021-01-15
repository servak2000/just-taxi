<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $author Название
 * @property string $author_status Статус относительно службы такси
 * @property string $picture Картинка
 * @property string $text Текст отзыва
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 */
class Review extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'author_status', 'picture', 'text'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['author', 'author_status', 'picture'], 'string', 'max' => 128],
            [['text'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Название',
            'author_status' => 'Статус относительно службы такси',
            'picture' => 'Картинка',
            'text' => 'Текст отзыва',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }
}
