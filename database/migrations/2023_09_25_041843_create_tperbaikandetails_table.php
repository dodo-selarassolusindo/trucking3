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
        Schema::create('tperbaikandetails', function (Blueprint $table) {
            $table->id();
            $table->integer('tperbaikan');
            $table->integer('jperbaikan');
            $table->integer('armada');
            $table->float('jumlah', 13, 2);
            $table->text('noted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tperbaikandetails');
    }
};
