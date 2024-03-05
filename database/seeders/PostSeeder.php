<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('posts')->insert([
        //     'title' => Str::random(20),
        //     'description' => Str::random(200),
        //     'status' => 1,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 1
        // ]);

        // for($i=0; $i<3;$i++)
        // {
        //     // DB::table('posts')->insert([
        //     //     'title' => Str::random(20),
        //     //     'description' => Str::random(200),
        //     //     'status' => 1,
        //     //     'publish_date' => date('Y-m-d'),
        //     //     'user_id' => $i
        //     // ]);

        //     DB::table('posts')->insert([
        //         'title' => 'post1',
        //         'description' => 'this is a test description',
        //         'status' => 1,
        //         'publish_date' => date('Y-m-d'),
        //         'user_id' => $i
        //     ]);
            
        //     // DB::table('categories')->insert([
        //     //     'name' => Str::random(8)
        //     // ]);
        // }

        
    }
}
