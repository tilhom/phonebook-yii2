<?php

use yii\db\Schema;
use yii\db\Migration;

class m150619_113104_init_subscriber extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'subscriber',
            [
                'id' => 'pk',
                'user_id' => 'int',
                'name' => 'string',
                'birth_date' => 'date',
                'notes' => 'text',
            ],
            'ENGINE=InnoDB'
        );
         $this->addForeignKey('user_subscriber_list', 'subscriber',
        'user_id', 'user', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('user_subscriber_list', 'subscriber');
        $this->dropTable('subscriber');
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
