<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expense_head_id');
            $table->string('name');
            $table->text('invoice_number');
            $table->date('date');
            $table->decimal('amount');
            $table->text('attach_document')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('add_expenses');
    }
}
