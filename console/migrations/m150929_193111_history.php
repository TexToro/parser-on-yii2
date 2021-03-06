<?php

use yii\db\Schema;
use yii\db\Migration;

class m150929_193111_history extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%history}}', [
            'id' => $this->primaryKey(),
            'score' => $this->string(10),
            'team' => $this->string(50),
            'home' => $this->string(10),
            'draw' => $this->string(10),
            'away' => $this->string(10),
            'hash' => $this->string(),
            'date' => $this->dateTime(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%history}}');
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
