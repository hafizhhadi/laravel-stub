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
            Schema::create('districts', function (Blueprint $table) {
                $table -> ulid('id') -> primary();
                $table -> string('name', 40) -> nullable();
                $table -> string('district_code', 4) -> nullable();
                $table -> foreignUlid('state_id') -> constrained('states', 'id') -> cascadeOnUpdate() -> cascadeOnDelete();

                // Track
                $table -> softDeletes();
                $table -> timestamps();
            });
        }
        catch (\Throwable)
        {
            Schema::dropIfExists('districts');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
