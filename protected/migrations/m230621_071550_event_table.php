<?php

class m230621_071550_event_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('event' , [
	        'id' => 'pk',
            'title' => 'string NOT NULL',
            'password' => 'string NOT NULL',
        ]);
	}

	public function down()
	{
		echo "m230621_071550_event_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}