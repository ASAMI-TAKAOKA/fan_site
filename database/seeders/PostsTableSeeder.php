<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ← 追記 *********

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ↓ 追記 *********
        DB::table('posts')->insert(['id'=>1,'title'=>'大橋担','body'=>'お友達になりませんか？']); // ← 追記 *********
        DB::table('posts')->insert(['id'=>2,'title'=>'高橋担','body'=>'語り合いましょう']); // ← 追記 *********
        DB::table('posts')->insert(['id'=>3,'title'=>'西畑担','body'=>'お話ししましょ']); // ← 追記 *********
        DB::table('posts')->insert(['id'=>4,'title'=>'大西担','body'=>'よろしくお願いします！']); // ← 追記 *********
    }
}
