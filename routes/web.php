<?php

use App\Http\Controllers\AuthicationProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/register',function(){
   return view('register');
});

Route::get('/', function (Request $request) {
    if($request->session()->has('Customer')){
        return redirect('/backlink/dashboard/');
    }
    return view('welcome');
});



Route::post('/register-process/',[AuthicationProfileController::class,'RegisterNewCustomer']);
Route::post('/login-process/',[AuthicationProfileController::class,'LoginCustomer']);
Route::get('/logout/',[AuthicationProfileController::class,'LogoutCustomer']);




Route::middleware('CustomerVerified')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/backlink/dashboard/', 'home');
        Route::get('/backlink/seo/backlink/order/','createOrder');
        Route::get('/daplans/','daplans');
        Route::post('/add-da-process/','daprocess');
        Route::post('/da-cat-add-process/','daCat');
        Route::get('/da-plan-finder/','ajax_call_da_plan');
    });
});
