<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_forms', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('PK');
            
            $table->string('alias', 8)->comment('for the system use, only');
            $table->string('name', 16)->comment('payment form name on russian (for human eyes)');
            $table->string('translit', 16)->comment('for SEO and marketing');            

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
        Schema::dropIfExists('payment_forms');
    }
}
