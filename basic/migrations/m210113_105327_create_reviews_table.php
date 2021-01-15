<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reviews}}`.
 */
class m210113_105327_create_reviews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reviews}}', [
            'id' => $this->primaryKey(),
            'author' => $this->string(128)->notNull()->comment('Название'),
            'author_status' => $this->string(128)->notNull()->comment('Статус относительно службы такси'),
            'picture' => $this->string(128) -> notNull() ->comment('Картинка'),
            'text' => $this->string(256) -> notNull() ->comment('Текст отзыва'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reviews}}');
    }
}
