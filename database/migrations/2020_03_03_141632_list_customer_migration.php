<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListCustomerMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('list_customers', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('cust_code');
          $table->string('cust_name');
          $table->string('cust_territory');
          $table->text('cust_address');
          $table->string('cust_region');
          $table->integer('cust_phone');
          $table->string('sales_code');
          $table->string('sales_name');
          $table->string('keterangan');
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
        Schema::dropIfExists('list_customes');
    }
}
