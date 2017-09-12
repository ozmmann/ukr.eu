<?php

use yii\db\Migration;

class m170912_124700_orders extends Migration
{
    public function safeUp()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'qty' => $this->integer(3)->notNull(),
            'sum' => $this->float()->notNull(),
            'status' => $this->integer(1)->defaultValue(null),
            'name' => $this->string(40)->notNull(),
            'email' => $this->string(60)->notNull(),
            'phone' => $this->string(12)->notNull(),
            'location' => $this->string(30)->notNull(),
            'address' => $this->string(30)->notNull(),
        ]);
    }

    public function safeDown()
    {
        echo "m170912_124700_orders cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170912_124700_orders cannot be reverted.\n";

        return false;
    }
    */
}
