<?php namespace Dmrch\Seo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAssertivesTable extends Migration
{
    public function up()
    {
        Schema::create('dmrch_seo_assertives', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('seo_title', 255);
            $table->string('seo_key', 255);
            $table->text('seo_description');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dmrch_seo_assertives');
    }
}
