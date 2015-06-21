<?php

use yii\db\Schema;
use yii\db\Migration;

class m150619_081709_add_user extends Migration
{
    public function up()
    {

        $this->execute($this->addUserSql1());
        $this->execute($this->addUserSql2());
    }

    private function addUserSql1()
    {
        $password = Yii::$app->security->generatePasswordHash('admin12345');
        $auth_key = Yii::$app->security->generateRandomString();
        $token = Yii::$app->security->generateRandomString() . '_' . time();
        $time=time();
        return "INSERT INTO {{%user}} (`username`, `email`, `password_hash`, `auth_key`, `password_reset_token`,role , created_at, updated_at) VALUES ('admin', 'admin@myblog.loc', '$password', '$auth_key', '$token', 'admin','$time','$time')";
    }
    private function addUserSql2()
    {
        $password = Yii::$app->security->generatePasswordHash('123456');
        $auth_key = Yii::$app->security->generateRandomString();
        $token = Yii::$app->security->generateRandomString() . '_' . time();
        $time=time();
        return "INSERT INTO {{%user}} (`username`, `email`, `password_hash`, `auth_key`, `password_reset_token`,role , created_at, updated_at) VALUES ('user1', 'user1@myblog.loc', '$password', '$auth_key', '$token', 'user','$time','$time')";
    }
    public function down()
    {
        $this->execute($this->delUserSql1());
        $this->execute($this->delUserSql1());
    }
    
    private function delUserSql1()
    {
        return "DELETE FROM {{%user}} WHERE `username`='admin'";
    }

    private function delUserSql2()
    {
        return "DELETE FROM {{%user}} WHERE `username`='user1'";
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
