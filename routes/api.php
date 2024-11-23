<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InsurancePolicyController;
use App\Http\Controllers\PolicyHolderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\SystemSettingController;
use App\Http\Controllers\TicketCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('sub_categories', SubCategoryController::class);
    Route::resource('ticket_categories', TicketCategoryController::class);
    Route::resource('insurance_policies', InsurancePolicyController::class);
    Route::resource('policy_holders', PolicyHolderController::class);
    Route::resource('system_settings', SystemSettingController::class);
});

Route::group(['middleware' => ['auth', 'role:staff']], function () {
    Route::resource('support_tickets', SupportTicketController::class);
    Route::resource('reports', ReportController::class);
});

Route::get('/roles', [RoleController::class, 'index']);
Route::post('/roles', [RoleController::class, 'store']);
Route::get('/roles/{id}', [RoleController::class, 'show']);
Route::put('/roles/{id}', [RoleController::class, 'update']);
Route::delete('/roles/{id}', [RoleController::class, 'destroy']);
