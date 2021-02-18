<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateRainlabBlogCategories extends Migration
{
    public function up()
    {
        if (Schema::hasTable('rainlab_blog_categories')) {
            Schema::table('rainlab_blog_categories', function($table)
            {
                $table->string('seo_title',250)->nullable();
                $table->text('seo_description')->nullable();
                $table->text('seo_keywords')->nullable();
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('rainlab_blog_categories', 'seo_title')) {
            Schema::table('rainlab_blog_categories', function($table)
            {
                $table->dropColumn('seo_title');
            });
        }

        if (Schema::hasColumn('rainlab_blog_categories', 'seo_description')) {
            Schema::table('rainlab_blog_categories', function($table)
            {
                $table->dropColumn('seo_description');
            });
        }

        
        if (Schema::hasColumn('rainlab_blog_categories', 'seo_keywords')) {
            Schema::table('rainlab_blog_categories', function($table)
            {
                $table->dropColumn('seo_keywords');
            });
        }
    }
}
