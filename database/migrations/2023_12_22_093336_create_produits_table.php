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
        Schema::create('produits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('details')->nullable();
            $table->string('prix');
            $table->string('quantity');
            $table->foreignUuid('user_id')->constained('users');
            $table->foreignUuid('category_product_id')->constained('category_products');
            $table->foreignUuid('produit_status_id')->constained('produit_statuses');
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
        Schema::dropIfExists('produits');
    }
};
