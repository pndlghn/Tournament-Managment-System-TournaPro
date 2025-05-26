<?php
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Models\Game;
use function Laravel\Prompts\select;

Route::get('/', [HomeController::class, 'index']);

Route::get('/tournaments', function(){
    return view('tournaments');
});

