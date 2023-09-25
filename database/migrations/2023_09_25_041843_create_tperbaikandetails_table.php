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
        Schema::create('tperbaikan_tperbaikandetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tperbaikan_id')->constrained();
            $table->foreignId('jperbaikan_id')->constrained();
            $table->foreignId('armada_id')->constrained();
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
