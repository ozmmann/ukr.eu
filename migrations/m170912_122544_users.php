<?php

use yii\db\Migration;

class m170912_122544_users extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey()->notNull(),
            'first_name' => $this->string(20)->defaultValue(null),
            'last_name' => $this->string(30)->defaultValue(null),
            'username' => $this->string(100)->defaultValue(null),
            'user_email' => $this->string(60)->defaultValue(null),
            'reserved_email' => $this->string(60)->defaultValue(null),
            'user_phone' => $this->string(12)->defaultValue(null),
            'password' => $this->string(60)->notNull(),
            'auth_key' => $this->string(60)->defaultValue(null),
            'acces_token' => $this->string(60)->defaultValue(null),
        ]);
    }

    public function safeDown()
    {
        echo "m170912_122544_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170912_122544_users cannot be reverted.\n";

        return false;
    }
    */
}
