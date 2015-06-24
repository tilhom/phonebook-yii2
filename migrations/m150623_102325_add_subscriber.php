<?php

use yii\db\Schema;
use yii\db\Migration;

class m150623_102325_add_subscriber extends Migration
{
    public function safeUp()
    {
        $faker = Faker\Factory::create();
        
        for ($i=0; $i < 10; $i++) { 
      
        $name=$faker->name;
        $birth_date=$faker->date;
        $notes=$faker->text;

        $this->execute(
            "INSERT INTO `subscriber` (`id`, `user_id`, `name`, `birth_date`, `notes`) VALUES (NULL, NULL, '$name', '$birth_date', '$notes');"
            );
        }
        

    }

    public function safeDown()
    {
        echo "No down method!!!Please delete by hand";
        return false;
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
