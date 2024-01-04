<?php

namespace App\Models\Locations;

use App\Models\Locations\District;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasUlids, HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'state_code',
    ];

    protected $casts = [
        'name'       => 'string',
        'state_code' => 'string',
    ];

    /**
     * Relationships
     */
    public function districts(): HasMany
    {
        return $this -> hasMany(District::class);
    }
}
