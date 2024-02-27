<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['preco_venda', 'estoque_minimo', 'estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->double('preco_venda', 8, 2);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
        });

        Schema::table('produto_filiais', function (Blueprint $table) {
            $table->dropForeign('produto_filiais_product_id_foreign');
            $table->dropForeign('produto_filiais_filial_id_foreign');
            $table->dropColumn('product_id');
            $table->dropColumn('filial_id');
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
};
