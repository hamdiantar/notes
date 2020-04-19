<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->boolean('is_admin')->default(0);
                $table->rememberToken();
                $table->timestamps();
            });
        }

        if (Schema::hasTable('users')) {
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                'is_admin' => 1
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
