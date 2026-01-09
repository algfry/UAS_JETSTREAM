<?php //Menghubungkan URL → Controller

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;

Route::apiResource
(
    'products', ProductApiController::class
);