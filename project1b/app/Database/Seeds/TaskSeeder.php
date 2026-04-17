<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tasks')->insert([
            'name'        => 'Belajar CodeIgniter',
            'description' => 'CI merupakan framework PHP dengan konsep MVC.',
            'done'        => false,
        ]);
    }
}
