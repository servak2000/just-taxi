<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cars}}`.
 */
class m201222_143521_create_cars_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cars}}', [
            'id' => $this->primaryKey(),
            'model' => $this->string(128) -> notNull() ->comment('Марка'),
            'image' => $this->string(128) -> notNull() ->comment('Фотография'),
            'release_year' => $this->integer() -> notNull() -> comment('Год выпуска'),
            'mileage' => $this->integer() ->notNull()->comment('Пробег'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cars}}');
    }
}
