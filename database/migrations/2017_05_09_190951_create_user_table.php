<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cart');
        Schema::dropIfExists('wishlist');
        Schema::dropIfExists('bundle_order');
        Schema::dropIfExists('order');
        Schema::dropIfExists('address');
        Schema::dropIfExists('user');

        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('role')->default('user');
            $table->string('api_token')->nullable();
            $table->string('register_token')->default(str_random(32));
            $table->boolean('is_verified')->default(false);
            $table->integer('is_subscriber')->nullable();
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
        //
    }
}
