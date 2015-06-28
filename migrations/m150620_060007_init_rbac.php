<?php

use yii\db\Schema;
use yii\db\Migration;

class m150620_060007_init_rbac extends Migration
{
  
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->execute(
        "INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
        ('admin', 1, 'It can do anything ', NULL, NULL, 1434779474, 1434779474),
        ('permission_admin', 2, 'Permission to add/setup/modify permissions, roles and role assigments', NULL, NULL, 1434779326, 1434779326),
        ('permission_user', 2, 'Permission to add/modify subscribers and phones their own subscribers', NULL, NULL, 1434789092, 1434789309),
        ('user', 1, 'The role can add, edit, and delete their own subscribers', NULL, NULL, 1434789223, 1434789223);
        
        INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
        ('admin', 'permission_admin'),
        ('user', 'permission_user'),
        ('admin', 'user');

        INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES ('admin', '1', 1434779506),
            ('user', '2', 1435394055);"
        );
    }
    
    public function safeDown()
    {
        $this->execute(
            "DELETE FROM `auth_item` WHERE `name`='admin' OR `name`='permission_admin';
             DELETE FROM `auth_item` WHERE `name`='user' OR `name`='permission_user';
             DELETE FROM `auth_item_child` WHERE `parent` = 'admin' AND `child` = 'permission_admin';
             DELETE FROM `auth_item_child` WHERE `parent` = 'user' AND `child` = 'permission_user';
             DELETE FROM `auth_item_child` WHERE `parent` = 'admin' AND `child` = 'user';
             
             DELETE FROM `auth_assignment` WHERE `item_name` = 'admin' AND `user_id` = '1';
             DELETE FROM `auth_assignment` WHERE `item_name` = 'user' AND `user_id` = '2';

             "
            );
    }
    
}
