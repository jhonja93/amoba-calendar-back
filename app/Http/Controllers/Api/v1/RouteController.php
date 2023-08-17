<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CalendarDaysDisabled;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index (Request $request)
    {

        $data = [
            "id" => $request->id,
            "dias_deshabilitados_por_calendario" => null,
            "dias_fuera_de_frecuencia" => null,
            "dias_reservados" => null,
            "dias_con_servicio" => null,
            "capacidad_ruta" => null
        ];

        $dias_deshabilitados_por_calendario = CalendarDaysDisabled::with('calendar')->where('route_id', $request->id)->get();

        // if ($request->dateRange[0] == $request->dateRange[1]) {
        //     $data = Route::where('id', $request->id)->with('route_data')->whereDate('start_timestamp', $request->dateRange[0])->get();
        // } else {
        //     $data = Route::where('id', $request->id)->with('route_data')->whereBetween('start_timestamp', $request->dateRange)->get();
        // }

        // $data = Route::where('id', $request->id)->with('route_data')->get();

        return response()->json([
            'data' => $data
        ]);
    }
}
