<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RouteData extends Model
{
    use HasFactory;

    protected $table = 'route_data';

    public function route() : BelongsTo
    {
        return $this->belongsTo(Route::class);
    }
}
