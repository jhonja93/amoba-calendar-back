<?php

namespace Database\Seeders;

use App\Models\CalendarDaysDisabled;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalendarDaysDisabledSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $calendarDaysDisableds = json_decode(file_get_contents(__DIR__ . '/data/calendar_days_disabled.json'));

        foreach ($calendarDaysDisableds->calendar_days_disabled as $key => $calendarDaysDisabled) {
            CalendarDaysDisabled::create([
                "id" => $calendarDaysDisabled->id,
                "calendar_id" => $calendarDaysDisabled->calendar_id,
                "day" => $calendarDaysDisabled->day,
                "enabled" => $calendarDaysDisabled->enabled,
                "created_at" => $calendarDaysDisabled->created_at,
                "updated_at" => $calendarDaysDisabled->updated_at,
            ]);
        }
    }
}
