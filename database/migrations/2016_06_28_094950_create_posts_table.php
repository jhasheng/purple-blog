<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('cat_id')->comment('分类ID');
            $table->string('title', 100)->comment('标题');
            $table->string('description', 200)->comment('描述');
            $table->text('content')->comment('内容');
            $table->integer('views')->comment('查看数');
            $table->integer('comments')->comment('评论数');
            $table->integer('likes')->comment('like数');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
