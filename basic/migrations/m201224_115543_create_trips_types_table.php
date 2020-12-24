<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trips_types}}`.
 */
class m201224_115543_create_trips_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trips_types}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128) -> notNull() ->comment('Название'),
            'max_price' => $this->integer() -> notNull() -> comment('Максимальная цена'),
            'description' => $this->text()->notNull()->comment('Описание'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%trips_types}}');
    }
}
