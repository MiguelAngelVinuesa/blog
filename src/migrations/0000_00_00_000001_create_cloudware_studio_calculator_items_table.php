<?php
/**
 * Created by Cloudware-Studio.
 * User: miky
 * Date: 21/10/17
 * Time: 13:06
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;


class CreateCloudwareStudioBlogTables extends Migration
{
    public function up()
    {
        Schema::create('cloudware_studio_blog_posts', function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->text('slug', 255);
            $t->text('name', 255);
            $t->text('description', 255);
            $t->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('cloudware_studio_blog_posts');
    }
}