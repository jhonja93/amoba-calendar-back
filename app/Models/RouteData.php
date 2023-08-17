<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RouteData extends Model
{
    use HasFactory;

    protected $table = 'route_data';

    protected $fillable = [
        'route_id',
        'calendar_id',
        'vinculation_route',
        'route_circular',
        'date_init',
        'date_finish',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
        'sun'
    ];

    public function route() : BelongsTo
    {
        return $this->belongsTo(Route::class);
    }

    public function calendar() : BelongsTo
    {
        return $this->belongsTo(Calendar::class);
    }
}
