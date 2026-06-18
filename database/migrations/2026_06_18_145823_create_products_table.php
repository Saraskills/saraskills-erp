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
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('brand_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('unit_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('tax_rate_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('sku')->unique();

            $table->string('name');

            $table->string('slug')->nullable();

            $table->longText('description')->nullable();

            $table->enum('item_type', [
                'item',
                'service',
                'combo',
                'digital'
            ])->default('item');

            $table->decimal('cost_price', 15, 4)
                ->default(0);

            $table->decimal('selling_price', 15, 4)
                ->default(0);

            $table->boolean('track_stock')
                ->default(true);

            $table->boolean('has_variant')
                ->default(false);

            $table->boolean('has_expiry')
                ->default(false);

            $table->boolean('allow_decimal_qty')
                ->default(false);

            $table->string('image')
                ->nullable();

            $table->boolean('status')
                ->default(true);

            $table->foreignId('created_by')
                ->nullable();

            $table->foreignId('updated_by')
                ->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
