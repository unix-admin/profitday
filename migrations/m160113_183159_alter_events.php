<?php

use yii\db\Schema;
use yii\db\Migration;

class m160113_183159_alter_events extends Migration
{
    public function up()
    {
        $this->addColumn('events','place',$this->string(255));
    }

    public function down()
    {
        echo "m160113_183159_alter_city cannot be reverted.\n";
        $this->dropColumn('events','place');
        return true;
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
