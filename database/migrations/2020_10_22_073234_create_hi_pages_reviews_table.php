<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiPagesReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hi_pages_reviews', function (Blueprint $table) {
            $table->id();
            $table->string("person")->nullable();
            $table->string("title")->nullable();
            $table->string("icon")->nullable();
            $table->text("review")->nullable();

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
        Schema::dropIfExists('hi_pages_reviews');
    }
}
