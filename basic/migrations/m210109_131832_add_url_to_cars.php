<?php

use yii\db\Migration;

/**
 * Class m210109_131832_add_url_to_cars
 */
class m210109_131832_add_url_to_cars extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn( '{{%cars}}', 'url', $this->string(128)->notNull()->comment('URL'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn( '{{%cars}}', 'url');
    }


}
