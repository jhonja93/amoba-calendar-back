<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $calendars = json_decode(File::get(database_path('seeders/data/calendar.json')));

        if (json_last_error() !== JSON_ERROR_NONE) {
            // Manejo de error en la decodificación del JSON
            dd('Error en el JSON:', json_last_error_msg());
        }

        foreach ($calendars->calendar as $key => $calendar) {
            Calendar::create([
                "id" => $calendar->id,
                "name" => $calendar->name,
                "created_at" => $calendar->created_at,
                "updated_at" => $calendar->updated_at,
            ]);
        }
    }
}
