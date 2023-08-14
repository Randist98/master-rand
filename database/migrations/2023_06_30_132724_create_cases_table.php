<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('username')->nullable();
            $table->string('status')->nullable();
            $table->text('description')->nullable(); // Increase column length to 'text'
            $table->string('address')->nullable();
            $table->string('beneficiary')->nullable();
            $table->integer('NoBeneficiary')->nullable();
            $table->decimal('totalAmount', 10, 2)->nullable();
            $table->decimal('amountCollected', 10, 2)->nullable();

            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
}

