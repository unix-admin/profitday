<?php

use yii\db\Schema;
use yii\db\Migration;

class m151221_085857_init_database extends Migration
{
    public function up()
    {
    $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('admins', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'fio' => $this->string(32)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'title_uk' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_en' => $this->string(255)->notNull(),
            'have_event' => $this->boolean()->defaultValue(false),
        ], $tableOptions);
        $this->createTable('events', [
            'id' => $this->primaryKey(),
            'city_id' => $this->integer()->notNull(),
            'event_date' => $this->dateTime(),
            'title_uk' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_en' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
        ], $tableOptions);
        $this->createTable('photos', [
            'event_id' => $this->integer()->notNull(),
            'photo_path' => $this->string(255)->notNull(),
        ], $tableOptions);
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'need_presentation' => $this->boolean()->defaultValue(false),
            'need_training' => $this->boolean()->defaultValue(false),
            'pay_agree' => $this->boolean()->defaultValue(false),
            'ideas' => $this->text(),
            'contact_person' => $this->string(255)->notNull(),
            'telephone' => $this->string(255),
            'e_mail' => $this->string(255),
            'site' => $this->string(255),
            'skype' => $this->string(255),
            'is_organisator' => $this->boolean()->defaultValue(false),
            'is_sponsor' => $this->boolean()->defaultValue(false),
            'order' => $this->integer()->notNull(),
            'logo_url' => $this->string(255),
            'intro_uk' => $this->string(255)->notNull(),
            'intro_ru' => $this->string(255)->notNull(),
            'intro_en' => $this->string(255)->notNull(),
            'facebook_profile' => $this->string(255)->notNull(),
            'google_profile' => $this->string(255)->notNull(),
            'linkedin_profile' => $this->string(255)->notNull(),
            'vk_profile' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable('registration_by_cities', [
            'city_id' => $this->integer()->notNull(),
            'registration_id' => $this->integer()->notNull(),
            'registration_type' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('registration_by_event_sections', [
            'section_id' => $this->integer()->notNull(),
            'registration_id' => $this->integer()->notNull(),
            'registration_type' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'title_uk' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_en' => $this->string(255)->notNull(),
            'content_uk' => $this->text()->notNull(),
            'content_ru' => $this->text()->notNull(),
            'content_en' => $this->text()->notNull(),
            'tags_uk' => $this->string(255)->notNull(),
            'tags_ru' => $this->string(255)->notNull(),
            'tags_en' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
        ], $tableOptions);



        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'working_place' => $this->string(255)->notNull(),
            'how_know_about' => $this->string(255)->notNull(),
            'ideas' => $this->text(),
            'telephone' => $this->string(255),
            'e_mail' => $this->string(255),
            'skype' => $this->string(255),
            'facebook_profile' => $this->string(255)->notNull(),
            'google_profile' => $this->string(255)->notNull(),
            'linkedin_profile' => $this->string(255)->notNull(),
            'vk_profile' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable('event_sections', [
            'id' => $this->primaryKey(),
            'title_uk' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_en' => $this->string(255)->notNull(),
            'displayed_default' => $this->boolean()->defaultValue(false),
        ], $tableOptions);

        $this->createTable('event_program', [
            'event_id' => $this->integer()->notNull(),
            'time_start' => $this->time()->notNull(),
            'time_end' => $this->time()->notNull(),
            'auditory_id' => $this->integer()->notNull(),
            'section_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('event_auditories', [
            'id' => $this->primaryKey(),
            'title_uk' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_en' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->insert('admins', [
            'username' => 'admin',
            'password_hash' => '$2y$13$jWwoDOw24qwhdTKo5l9zgOFJHUnltCH5t9b57W/6JWAE7VAv3RASK',
            'status' => '10',
            'email'=>'admin@localhost.com',
        ]);$this->insert('admins',[
                'username' => 'user',
                'password_hash' => '$2y$13$gFt7ev8aeJqaTsdjsI7QH.ZohyqKAklcnW6LR/h.JYbwrgbf0iwA2',
                'status' => '10',
                'email'=>'user@localhost.com'
            ]
	);
    }

    public function down()
    {
        echo "m151221_085857_init_database cannot be reverted.\n";
	    $this->dropTable('admins');
        $this->dropTable('city');
        $this->dropTable('events');
        $this->dropTable('photos');
        $this->dropTable('company');
        $this->dropTable('registration_by_cities');
        $this->dropTable('registration_by_event_sections');
        $this->dropTable('content');
        $this->dropTable('person');
        $this->dropTable('event_sections');
        $this->dropTable('event_program');
        $this->dropTable('event_auditories');
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
