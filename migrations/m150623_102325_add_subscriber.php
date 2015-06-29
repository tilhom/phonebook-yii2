<?php

use yii\db\Schema;
use yii\db\Migration;

class m150623_102325_add_subscriber extends Migration
{
    public function safeUp()
    {
        $faker = Faker\Factory::create();
        //generate 5 subscribers for user admin (id=1)
        for ($i=0; $i < 5; $i++)
            $this->insert('subscriber',[
                'id'=> $i+1, 
                'user_id'=> 1, 
                'name'=> $faker->name , 
                'birth_date'=> $faker->date, 
                'notes'=>$faker->realText,
                ]);
        
        //generate 5 phones for user admin (id=1)
        for ($i=0; $i < 5; $i++) 
            $this->insert('phone',[
                'subscriber_id' => $i+1,
                'number'=>$faker->phoneNumber,
                ]);
        //generate 5 subscribers for user user1 (id=2)
        for ($i=5; $i < 10; $i++)
            $this->insert('subscriber',[
                'id'=> $i+1, 
                'user_id'=> 2, 
                'name'=> $faker->name , 
                'birth_date'=> $faker->date, 
                'notes'=>$faker->realText,
                ]);
        //generate 5 phones for user user1 (id=2)
        for ($i=5; $i < 10; $i++) {
            $this->insert('phone',[
                'subscriber_id'=>$i+1,
                'number'=>$faker->phoneNumber,
                ]);
            $this->insert('phone',[
                'subscriber_id'=>$i+1,
                'number'=>$faker->phoneNumber,
                ]);
        }

        

    }

    public function safeDown()
    {
        $this->delete('phone');
        $this->delete('subscriber');

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
