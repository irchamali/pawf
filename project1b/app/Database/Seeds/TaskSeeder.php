<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tasks')->insert([
            'name'        => 'Learn CodeIgniter',
            'description' => 'CI is a PHP framework that uses the MVC pattern.',
            'done'        => false,
        ]);
    }
}
