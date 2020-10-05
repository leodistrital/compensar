<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class People extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'category_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'description' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('people');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('people');
	}
}