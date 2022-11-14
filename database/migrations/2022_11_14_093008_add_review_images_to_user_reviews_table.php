<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReviewImagesToUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_reviews', function (Blueprint $table) {
            $table->text('img_one')->nullable();
            $table->text('img_two')->nullable();
            $table->text('img_three')->nullable();
            $table->text('img_four')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_reviews', function (Blueprint $table) {
            $table->dropColumn('img_one');
            $table->dropColumn('img_two');
            $table->dropColumn('img_three');
            $table->dropColumn('img_four');
        });
    }
}
