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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users","id");
            $table->dateTime("transaction-time");
            $table->decimal("amount",10,2);
            $table->string("item-name");
            $table->string("shop_name");
            $table->enum("type",["revenue","expenses"]);
            $table->string("payment_method");
            $table->uuid("receipt")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
