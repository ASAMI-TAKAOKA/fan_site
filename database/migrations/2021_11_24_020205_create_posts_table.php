<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB; // ← 追記 *********
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 8)->comment('タイトル');  // ← 追記 *********
            $table->text('body')->comment('本文');  // ← 追記 *********
            $table->timestamps();
        });
        DB::table('posts')->insert(['id'=>1,'title'=>'大橋担','body'=>'大橋くんのファンの方、お友達になりませんか？']); // ← 追記 *********
        DB::table('posts')->insert(['id'=>2,'title'=>'高橋担','body'=>'高橋くんの魅力はあのクールな瞳！']); // ← 追記 *********
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
