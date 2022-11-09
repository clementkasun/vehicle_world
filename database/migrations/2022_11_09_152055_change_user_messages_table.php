<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_messages', function (Blueprint $table) {
            // $table->dropColumn('user_id');
            $table->unsignedBigInteger('user_from_id')->nullable();
            $table->unsignedBigInteger('user_to_id')->nullable();
            $table->foreign('user_from_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('user_to_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->dateTime('read_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_messages', function (Blueprint $table) {
            $table->dropForeign('user_messages_user_from_id_foreign');
            $table->dropColumn('user_from_id');
            $table->dropForeign('user_messages_user_to_id_foreign');
            $table->dropColumn('user_to_id');
            $table->dropColumn('read_at');
        });
    }
}
