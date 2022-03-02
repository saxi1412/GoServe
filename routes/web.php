<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/twowheeler', 
[App\Http\Controllers\TwoWheelerController::class,'index']
)->name('index');

Route::post('/twowheeler',[App\Http\Controllers\TwoWheelerController::class,'createtwowheeler'])->name('addtwowheeler');




// Route::post('/twowheeler', 
// [App\Http\Controllers\TwoWheelerController::class,'create']
// );



Route::get('/fourwheeler', 
[App\Http\Controllers\FourWheelerController::class,'four']
)->name('four');

Route::post('/fourwheeler',[App\Http\Controllers\FourWheelerController::class,'createfourwheeler'])->name('createfourwheeler');



Route::get('/employees', 
[App\Http\Controllers\EmployeesController::class,'emp']
)->name('emp');

Route::post('/employees',[App\Http\Controllers\EmployeesController::class,'createemployee'])->name('createemployee');
Route::get('/editemployee/{id}',[App\Http\Controllers\EmployeesController::class,'editemployee'])->name('editemployee');
Route::put('/editemployee/{id}',[App\Http\Controllers\EmployeesController::class,'updateemployee'])->name('updateemployee');

Route::get('/deleteemployee/{id}',[App\Http\Controllers\EmployeesController::class,'destroyemployee'])->name('destroyemployee');


Route::get('/garage', 
[App\Http\Controllers\GarageController::class,'gar']
)->name('gar');
Route::post('/garage',[App\Http\Controllers\GarageController::class,'creategarage'])->name('creategarage');
Route::get('/editgarage/{id}',[App\Http\Controllers\GarageController::class,'editgarage'])->name('editgarage');
Route::put('/editgarage/{id}',[App\Http\Controllers\GarageController::class,'updategarage'])->name('updategarage');

Route::get('/deletegarage/{id}',[App\Http\Controllers\GarageController::class,'destroygarage'])->name('destroygarage');




Route::get('/consistentservice', 
[App\Http\Controllers\ConsistentServiceController::class,'cservice']
)->name('cservice');
Route::post('/consistentservice',[App\Http\Controllers\ConsistentServiceController::class,'createcservice'])->name('createcservice');
Route::get('/subservices/{id}',[App\Http\Controllers\ConsistentServiceController::class,'viewrservice'])->name('viewrservice');
Route::get('/editconsistentserviceform/{id}',[App\Http\Controllers\ConsistentServiceController::class,'editcservice'])->name('editcservice');
Route::put('/editconsistentserviceform/{id}',[App\Http\Controllers\ConsistentServiceController::class,'storecservice'])->name('storecservice');

Route::get('/rsaservice', 
[App\Http\Controllers\RsaServiceController::class,'rservice']
)->name('rservice');
// Route::get('/rsaservice',[App\Http\Controllers\RsaServiceController::class,'createrservice'])->name('createrservice');
Route::get('/editrsaserviceform/{id}',[App\Http\Controllers\RsaServiceController::class,'editrsaservice'])->name('editrsaservice');
Route::put('/editrsaserviceform/{id}',[App\Http\Controllers\RsaServiceController::class,'store'])->name('store');


Route::get('/reports', 
[App\Http\Controllers\ReportsController::class,'index']
);
Route::get('/complaints', 
[App\Http\Controllers\ComplaintsController::class,'index']
);
Route::get('/setting', 
[App\Http\Controllers\SettingController::class,'setting']
)->name('setting');
Route::put('/setting',[App\Http\Controllers\SettingController::class,'updateSettings'])->name('updateSettings');


Route::get('/supportstaffs', 
[App\Http\Controllers\SupportStaffsController::class,'support']
)->name('support');
Route::post('/supportstaffs',[App\Http\Controllers\SupportStaffsController::class,'createsupportstaff'])->name('createsupportstaff');
Route::get('/editsupportstaff/{id}',[App\Http\Controllers\SupportStaffsController::class,'editsupportstaff'])->name('editsupportstaff');
Route::put('/editsupportstaff/{id}',[App\Http\Controllers\SupportStaffsController::class,'updatesupportstaff'])->name('updatesupportstaff');

Route::get('/deletesupportstaff/{id}',[App\Http\Controllers\SupportStaffsController::class,'destroysupportstaff'])->name('destroysupportstaff');




Route::get('/customers', 
[App\Http\Controllers\CustomersController::class,'cust']
)->name('cust');

Route::post('/customers',[App\Http\Controllers\CustomersController::class,'createcustomer'])->name('createcustomer');
Route::get('/editcustomer/{id}',[App\Http\Controllers\CustomersController::class,'editcustomer'])->name('editcustomer');
Route::put('/editcustomer/{id}',[App\Http\Controllers\CustomersController::class,'updatecustomer'])->name('updatecustomer');

Route::get('/deletecustomer/{id}',[App\Http\Controllers\CustomersController::class,'destroycustomer'])->name('destroycustomer');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 
    [App\Http\Controllers\AdminController::class,'index']
);


Route::get('/addnewvehicle', 
[App\Http\Controllers\AddNewVehicleController::class,'addnew']
)->name('addnew');
Route::post('/addnewvehicle',[App\Http\Controllers\AddNewVehicleController::class,'createaddnew'])->name('createaddnew');

Route::get('/bookings', 
[App\Http\Controllers\BookingsController::class,'book']
)->name('book');

Route::get('/viewrsaservice/{id}',[App\Http\Controllers\RsaSubServiceController::class,'rsasub'])->name('rsasub');
Route::get('/editrsasubserviceform/{id}',[App\Http\Controllers\RsaSubServiceController::class,'editrsasub'])->name('editrsasub');
Route::put('/editrsasubserviceform/{id}',[App\Http\Controllers\RsaSubServiceController::class,'storersasub'])->name('storersasub');


// Route::get('/addoffer', 
// [App\Http\Controllers\AddOfferController::class,'addoffer']
// )->name('addoffer');
// Route::post('/addoffer',[App\Http\Controllers\AddOfferController::class,'createoffer'])->name('createoffer');
// Route::post('/offers',[App\Http\Controllers\OffersController::class,'storeoffer'])->name('storeoffer');
// Route::get('/offers', 
// [App\Http\Controllers\OffersController::class,'offer']
// )->name('offer');
