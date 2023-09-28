<?php

use App\Events\MyEvent;
use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\appointments\AppointmentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\LaboratorieEmployeeController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\RayEmployeeController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('dashboard_ad',[DashboardController::class,'dash']);
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
//########################## Dashboard user#########################
        Route::get('/dashboard/user', function () {
            return view('Dashboard.User.dashboard');
        })->middleware(['auth'])->name('dashboard.user');

//########################## Dashboard Admin#########################
       
        Route::get('/dashboard/admin', function () {

            return view('Dashboard.Admin.dashboard');
        })->middleware(['auth:admin'])->name('dashboard.admin');
//---------------------------------------------------------------



        Route::middleware('auth:admin')->group(function(){
//####################### section route###########################
            Route::resource('Sections',SectionController::class);


//####################### section route###########################

//############################# Doctors route #######################
            Route::resource('Doctors',DoctorController::class);
            Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
            Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');
//############################# end Doctors route ##################    


//############################# sections route ######################

        Route::resource('Service', SingleServiceController::class);

//############################# end sections route ##################

//############################# GroupServices route #################

Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');

//############################# end GroupServices route #############

//############################# insurance route ######################

        Route::resource('insurance', InsuranceController::class);
//############################# end insurance route ###################

//############################# ampulances route ######################

Route::resource('Ambulance', AmbulanceController::class);
//############################# end ampulances route ###################

//############################# patient route ######################

Route::resource('Patients', PatientController::class);
//############################# end patient route ###################


//############################# single_invoices route #############################

Route::view('single_invoices','livewire.single_invoices.index')->name('single_invoices');

Route::view('Print_single_invoices','livewire.single_invoices.print')->name('Print_single_invoices');

 //############################# end single_invoices route ###########################

 //############################# Receipt route ###########################

         Route::resource('Receipt', ReceiptAccountController::class);

 //############################# end Receipt route ######################

//############################# Payment route ##########################

         Route::resource('Payment', PaymentAccountController::class);

//############################# end Payment route ####################

  //############################# RayEmployee route #####################################

  Route::resource('ray_employee', RayEmployeeController::class);

  //############################# end RayEmployee route #################################
//############################# laboratorie_employee route ##########################################

        Route::resource('laboratorie_employee', LaboratorieEmployeeController::class);

 //############################# end laboratorie_employee route ######################################

//############################# single_invoices route ##########################################

        Route::view('group_invoices','livewire.group_invoices.index')->name('group_invoices');

        Route::view('group_Print_single_invoices','livewire.group_invoices.print')->name('group_Print_single_invoices');

//############################# end single_invoices route ######################################
Route::get('appointments',[AppointmentController::class,'index'])->name('appointments.index');
Route::put('appointments/approval/{id}',[AppointmentController::class,'approval'])->name('appointments.approval');
Route::get('appointments/approval',[AppointmentController::class,'index2'])->name('appointments.index2');
Route::get('appointments/finished',[AppointmentController::class,'finished'])->name('appointments.finished');
Route::delete('appointments/destroy/{id}',[AppointmentController::class,'destroy'])->name('appointments.destroy');










        });
        
        require __DIR__.'/auth.php';

    });


