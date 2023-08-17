<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
		"name"
    ];

    public function calendar_days_disabled()
    {
        return $this->hasMany(CalendarDaysDisabled::class);
    }

    public function route_data()
    {
        return $this->hasMany(RouteData::class);
    }

    public function days_disabled()
    {
        return $this->hasMany(CalendarDaysDisabled::class)->pluck('day');
    }
}
