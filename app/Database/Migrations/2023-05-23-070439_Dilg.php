<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDilgTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'lgu_place' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'brgy_num' => [
                'type' => 'BIGINT',
                'constraint' => 20,
            ],
            'income' => [
                'type' => 'BIGINT',
                'constraint' => 20,
            ],
            'lgoo_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'month' => [
                'type' => 'DATETIME',
            ],
            'lgmes' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'lgcds' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'fas' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('dilg');
    }

    public function down()
    {
        $this->forge->dropTable('dilg');
    }
}
