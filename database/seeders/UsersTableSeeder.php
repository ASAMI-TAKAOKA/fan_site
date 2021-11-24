<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ← 追記 *********

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ↓ メールアドレスを受信可能なものに設定すると通知メール試験でメールを受け取れます
        DB::table('users')->insert(['id' => 1, 'name' => '山田花子', 'email' => 'sute1@example.com', 'email_verified_at' => "2021-09-15 15:22:10", 'password' => bcrypt('password')]);
        DB::table('users')->insert(['id' => 2, 'name' => '畠山まさみ', 'email' => 'sute2@example.com', 'email_verified_at' => "2021-10-12 16:22:10", 'password' => bcrypt('password')]);
        DB::table('users')->insert(['id' => 3, 'name' => '伊藤順子', 'email' => 'sute3@example.com', 'email_verified_at' => "2021-11-14 17:22:10", 'password' => bcrypt('password')]);
        DB::table('users')->insert(['id' => 4, 'name' => '西岡京子', 'email' => 'sute4@example.com', 'email_verified_at' => "2021-11-22 18:22:10", 'password' => bcrypt('password')]);
    }
}
