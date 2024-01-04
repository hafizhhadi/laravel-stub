<?php

namespace App\Models\Locations;

use App\Models\Locations\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasUlids, HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'district_code',

        // Foreign Key
        'state_id',
    ];

    protected $casts = [
        'name'          => 'string',
        'district_code' => 'string',
        'state_id'      => 'string',
    ];

    /**
     * Relationships
     */
    public function state(): BelongsTo
    {
        return $this -> belongsTo(State::class, 'state_id');
    }
}
