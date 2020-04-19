<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('notes')) {
            Schema::create('notes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->text('body');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
}
