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
            Schema::create('states', function (Blueprint $table) {
                $table -> ulid('id') -> primary();
                $table -> string('name', 40) -> nullable();
                $table -> string('state_code', 2) -> nullable();
                // Track
                $table -> softDeletes();
                $table -> timestamps();
            });
        }
        catch (\Throwable)
        {
            Schema::dropIfExists('states');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
