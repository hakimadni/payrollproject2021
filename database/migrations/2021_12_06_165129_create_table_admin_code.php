<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdminCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_code', function (Blueprint $table) {
            $table->id();
            $table->string('code', 12);
            $table->timestamps();
        });

        DB::table('admin_code')->insert(
            array(
                'id' => '1',
                'code' => '123123'
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_code');
    }
}
