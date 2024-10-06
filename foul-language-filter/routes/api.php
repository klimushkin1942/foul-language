<?php

use App\Http\Controllers\FakeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/test', [FakeController::class, 'getList'])
    ->name('getFakeList');


Route::fallback(
    static function () {
        return response()->json(
            [
                'message' => Response::$statusTexts[Response::HTTP_NOT_FOUND],
                'code' => Response::HTTP_NOT_FOUND
            ],
            Response::HTTP_NOT_FOUND
        );
    }
);
