<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\BuyerController;

Route::resource('/buyer', BuyerController::class);
Route::resource('/equipment', EquipmentController::class);
Route::resource('/invoice', InvoiceController::class);
Route::resource('/manufacturer', ManufactureController::class);
Route::resource('/note', NotesController::class);


Route::get('/', function () {
    return view('welcome');
});

URL::forceScheme('https');

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/db-test',function () {
        try {
             \DB::connection()-> getPDO();
             $db_name = \DB::connection()->getDatabaseName();
             echo 'Datebase Connected: '.$db_name;
        }catch (\Exception $e) {
                echo 'None';
        }

});

Route::get('/db-migrate', function() {
            Artisan::call('migrate');
            echo Artisan::output();
});


Route::get('/events-feed', function(){
$arr = array(["title"=>"CSE4500 Class","start"=>"2022-02-23T17:30:00","end"=>"2022-02-23T18:45:00"],["title"=>"CSE4500 Class","start"=>"2022-02-28T17:30:00","end"=>"2022-02-28T18:45:00"]);
 echo json_encode($arr);
 
});


Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::resource('/event', EventController::class);
Route::resource('/todos', TodoController::class);


Route::fallback(function () {
    return view('error');
});

