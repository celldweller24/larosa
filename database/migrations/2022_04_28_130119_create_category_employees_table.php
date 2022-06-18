<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_employees', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('employee_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')
                ->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('category_id');
        Schema::dropForeign('employee_id');
        Schema::dropIfExists('category_employees');
    }
};
