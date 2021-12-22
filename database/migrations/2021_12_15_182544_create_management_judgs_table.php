<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementJudgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_judgs', function (Blueprint $table) {
            $table->id();
            $table->string('timeline_id');
            $table->unsignedInteger('timeline_status');
            $table->timestamp('created_at');
            $table->string('created_id');
            $table->timestamp('updated_at');
            $table->string('updated_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_judgs');
    }
}
