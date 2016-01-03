<?php

use yii\db\Schema;
use yii\db\Migration;

class m160103_104242_alter_content extends Migration
{
    public function up()
    {
        $this->addColumn('content','status',$this->smallInteger());
        $this->renameColumn('content','url','type');
    }

    public function down()
    {
        echo "m160103_104242_alter_content cannot be reverted.\n";

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
