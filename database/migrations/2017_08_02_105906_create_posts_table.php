<?php

use Illuminate\Support\Facades\Schema;
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
            $table->integer('issue_num');
            $table->tinyInteger('platform');
            $table->string('title');
            $table->text('body');
            $table->integer('id_uploader')->unsingned();
            // $table->string('uploader')->nullable();
            $table->integer('like')->unsigned()->default(0);
            $table->integer('view')->unsigned()->default(0);
            $table->char('predict_result', 1)->default('2');
            $table->tinyInteger('predict_type')->nullable();
            $table->timestamps();
            $table->string('remark')->nullable();
        });
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
