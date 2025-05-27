<?php
use App\Models\Game;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TournamentsController;
use function Laravel\Prompts\select;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', [HomeController::class, 'index']);

Route::get('/tournaments/{slug}', [TournamentsController::class, 'show']);
