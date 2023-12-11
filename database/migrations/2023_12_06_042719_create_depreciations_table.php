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
        Schema::create('depreciations', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('assets_class');
            $table->string('assets_name');
            $table->integer('units');
            $table->date('acquisition_date');
            $table->decimal('acquisition_cost', 10, 2);
            $table->decimal('deduct', 10, 2);
            $table->decimal('net_cost', 10, 2);
            $table->decimal('dep_percent', 5, 2);
            $table->integer('dep_month');
            $table->date('opening_date');
            $table->date('written_off_acc_date')->nullable();
            $table->decimal('written_off_expense', 10, 2)->nullable();
            $table->decimal('net_book_value', 10, 2);
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depreciations');
    }
};
