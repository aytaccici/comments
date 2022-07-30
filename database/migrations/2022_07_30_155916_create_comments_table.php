<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->longText('content');
            $table->tinyInteger('level')->default(1);
            $table->string('created_by', 255);
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
