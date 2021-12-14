<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_types', function (Blueprint $table) {
            $table->id();
            $table->string('asset_type_name')->unique();
            $table->text('asset_type_description',500);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('asset_types');
    }
}
