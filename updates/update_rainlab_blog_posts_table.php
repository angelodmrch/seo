<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateRainlabBlogPosts extends Migration
{
    public function up()
    {
        if (Schema::hasTable('rainlab_blog_posts')) {
            Schema::table('rainlab_blog_posts', function($table)        
            {
                $table->string('seo_title',250)->nullable();
                $table->text('seo_description')->nullable();
                $table->text('seo_keywords')->nullable();
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('rainlab_blog_posts', 'seo_title')) {
            Schema::table('rainlab_blog_posts', function($table)
            {
                $table->dropColumn('seo_title');
            });
        }

        if (Schema::hasColumn('rainlab_blog_posts', 'seo_description')) {
            Schema::table('rainlab_blog_posts', function($table)
            {
                $table->dropColumn('seo_description');
            });
        }
        
        if (Schema::hasColumn('rainlab_blog_posts', 'seo_keywords')) {
            Schema::table('rainlab_blog_posts', function($table)
            {
                $table->dropColumn('seo_keywords');
            });
        }
    }
}
