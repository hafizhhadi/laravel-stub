<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        try
        {
            Schema::create('users', function (Blueprint $table) {
                $table -> id();
                $table -> string('name');
                $table -> string('email') -> unique();
                $table -> timestamp('email_verified_at') -> nullable();
                $table -> string('password');
                $table -> rememberToken();

                // Track
                $table -> softDeletes();
                $table -> timestamps();
            });
        }
        catch (\Throwable)
        {
            Schema::dropIfExists('users');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
