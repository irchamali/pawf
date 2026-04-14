<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterPostsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('posts', [
        'slug VARCHAR(100) UNIQUE'
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('posts', 'slug');
    }
}
