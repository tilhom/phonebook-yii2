<?php

use yii\db\Schema;
use yii\db\Migration;

class m150619_113113_init_phone extends Migration
{
     public function safeUp()
    {
        $this->createTable(
        'phone',
        [
            'id' => 'pk',
            'subscriber_id' => 'int NOT NULL',
            'number' => 'string NOT NULL',
        ],
        'ENGINE=InnoDB'
        );

        $this->addForeignKey('subscriber_phone_numbers', 'phone',
        'subscriber_id', 'subscriber', 'id','CASCADE','CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('subscriber_phone_numbers', 'phone');
        $this->dropTable('phone');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
