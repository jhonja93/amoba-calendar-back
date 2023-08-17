<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index (Request $request)
    {
        $data = Route::where('id', $request->id)->with('route_data')->get();

        return response()->json([
            'data' => $data
        ]);
    }
}
