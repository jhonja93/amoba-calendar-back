<?php

namespace Database\Seeders;

use App\Models\RouteData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routeDatas = json_decode(file_get_contents(__DIR__.'/data/route_data.json'));

        foreach ($routeDatas->routes_data as $key => $routeData) {
            RouteData::create([
                "id" => $routeData->id,
                "route_id" => $routeData->route_id,
                "calendar_id" => $routeData->calendar_id,
                "vinculation_route" => $routeData->vinculation_route,
                "route_circular" => $routeData->route_circular,
                "date_init" => $routeData->date_init,
                "date_finish" => $routeData->date_finish,
                "mon" => $routeData->mon,
                "tue" => $routeData->tue,
                "wed" => $routeData->wed,
                "thu" => $routeData->thu,
                "fri" => $routeData->fri,
                "sat" => $routeData->sat,
                "sun" => $routeData->sun,
                "created_at" => $routeData->created_at,
                "updated_at" => $routeData->updated_at,
            ]);
        }
    }
}
