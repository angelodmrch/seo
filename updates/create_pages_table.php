<?php namespace Dmrch\Seo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('dmrch_seo_pages', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('pages');
            $table->string('seo_title', 255);
            $table->string('seo_key', 255);
            $table->text('seo_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dmrch_seo_pages');
    }
}
