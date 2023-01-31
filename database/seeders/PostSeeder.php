<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        [   'title' => 'My First Post',
            'body'  => 'This is the body of my first blog post. Thank you',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        
        [
            'title' => 'Second Post',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quisquam enim quas vel cum beatae provident. Explicabo reiciendis, molestias culpa repellendus harum officia eligendi sit rerum perspiciatis voluptatum. Sit, aliquam?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
        ]);
    }
}
