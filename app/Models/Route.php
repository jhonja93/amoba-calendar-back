<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'invitation_code',
        'title',
        'start_timestamp',
        'end_timestamp'
    ];

    public function route_data() : HasMany
    {
        return $this->hasMany(RouteData::class);
    }
}
