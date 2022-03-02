<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/userLogin',[ApiController::class,'userLogin']); 
Route::post('/userRegister',[ApiController::class,'userRegister']); 
Route::post('/homePage',[ApiController::class,'homePage']); 
Route::post('/systemCheck',[ApiController::class,'systemCheck']); 
Route::post('/vehicle',[ApiController::class,'vehicle']); 
Route::post('/vehicleType',[ApiController::class,'vehicleType']); 
Route::post('/vehicleBrand',[ApiController::class,'vehicleBrand']); 
Route::post('/cart',[ApiController::class,'homcartePage']); 
Route::post('/booking',[ApiController::class,'booking']); 
Route::post('/timeSlot',[ApiController::class,'timeSlot']); 
Route::post('/services',[ApiController::class,'services']); 
Route::post('/getSubServices',[ApiController::class,'getSubServices']); 
Route::post('/subServicesData',[ApiController::class,'subServicesData']); 
Route::post('/getCart',[ApiController::class,'getCart']); 
Route::post('/paymentMethods',[ApiController::class,'paymentMethods']);
Route::post('/updatefcmtoken',[ApiController::class,'updatefcmtoken']);
Route::post('/getVehicleCompany',[ApiController::class,'getVehicleCompany']); 
Route::post('/getVehicleModel',[ApiController::class,'getVehicleModel']); 
Route::post('/addVehicle',[ApiController::class,'addVehicle']); 
Route::post('/getVehicle',[ApiController::class,'getVehicle']); 
Route::post('/getSubServicesOptions',[ApiController::class,'getSubServicesOptions']); 




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
