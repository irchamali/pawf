<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
            ],
            'name' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
            ],
            'description' => [
            'type' => 'TEXT',
            'null' => true,
            ],
            'done' => [
            'type'    => 'TINYINT',
            'default' => false,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tasks');
    }

    public function down()
    {
        $this->forge->dropTable('tasks');
    }
}
