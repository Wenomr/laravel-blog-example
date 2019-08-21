<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBlogpostsTableName extends Migration
{

    public function up()
    {
        Schema::rename('blogposts', 'blog_posts');
        // Schema::table('blogposts', function (Blueprint $table) {
        //     //
        // });
    }


    public function down()
    {   
        Schema::rename('blog_posts', 'blogposts');
        // Schema::table('blogposts', function (Blueprint $table) {
        //     //
        // });
    }
}
