<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostData extends Seeder
{
    public function run()
    {
        // truncate
        $this->db->table('posts')->truncate();

        // generate dummy data
        $data = [
            [
                'title' => 'First Post',
                'slug' => 'first-post',
                'body' => 'This is the first post.',
            ],
            [
                'title' => 'Second Post',
                'slug' => 'second-post',
                'body' => 'This is the second post.',
            ],
            [
                'title' => 'Third Post',
                'slug' => 'third-post',
                'body' => 'This is the third post.',
            ],
        ];

        // Using Query Builder
        $this->db->table('posts')->insertBatch($data);
    }
}
