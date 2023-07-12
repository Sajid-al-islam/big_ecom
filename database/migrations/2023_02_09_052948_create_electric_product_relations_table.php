<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectricProductRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electric_product_relations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('availability')->nullable();
            $table->bigInteger('processor_id')->nullable();
            $table->bigInteger('hdd_id')->nullable();
            $table->bigInteger('ssd_id')->nullable();
            $table->bigInteger('ram_id')->nullable();
            $table->bigInteger('feature_id')->nullable();
            $table->bigInteger('response_time_id')->nullable();
            $table->bigInteger('refresh_rate_id')->nullable();
            $table->bigInteger('input_type_id')->nullable();
            $table->tinyInteger('creator')->nullable();
            $table->string('slug',50)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });


        Schema::create('product_brands', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->timestamps();
        });

        Schema::create('product_availability', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('stock')->nullable();
            $table->bigInteger('min_stock')->nullable();
            $table->bigInteger('current_stock')->nullable();
            $table->timestamp('stock_updated_date')->nullable();
            $table->integer('creator')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        Schema::create('product_processors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('processor_id')->nullable();
            $table->timestamps();
        });

        Schema::create('product_hdds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('hdd_id')->nullable();
            $table->timestamps();
        });
        Schema::create('product_ssds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('ssd_id')->nullable();
            $table->timestamps();
        });
        Schema::create('product_rams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('ram_id')->nullable();
            $table->timestamps();
        });
        Schema::create('product_features', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('feature_id')->nullable();
            $table->timestamps();
        });
        Schema::create('product_response_times', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('response_time_id')->nullable();
            $table->timestamps();
        });

        Schema::create('product_refresh_rates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('refresh_rate_id')->nullable();
            $table->timestamps();
        });

        Schema::create('product_input_types', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('input_type_id')->nullable();
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
        Schema::dropIfExists('electric_product_relations');
        Schema::dropIfExists('product_brands');
        Schema::dropIfExists('product_availability');
        Schema::dropIfExists('product_processors');
        Schema::dropIfExists('product_hdds');
        Schema::dropIfExists('product_ssds');
        Schema::dropIfExists('product_rams');
        Schema::dropIfExists('product_features');
        Schema::dropIfExists('product_response_times');
        Schema::dropIfExists('product_refresh_rates');
        Schema::dropIfExists('product_input_types');
    }
}
