<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsvpTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsvp_tag', function (Blueprint $table) {

        $table->increments('id');
        $table->timestamps();

        # `rsvp_id` and `tag_id` will be foreign keys, so they have to be unsigned
        #  Note how the field names here correspond to the tables they will connect...
        # `rsvp_id` will reference the `rsvps table` and `tag_id` will reference the `tags` table.
        $table->integer('rsvp_id')->unsigned();
        $table->integer('tag_id')->unsigned();

        # Make foreign keys
        $table->foreign('rsvp_id')->references('id')->on('rsvps');
        $table->foreign('tag_id')->references('id')->on('tags');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rsvp_tag');
    }
}
