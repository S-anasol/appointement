<?php
use App\Models\Appointment;

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
    return view('welcome');
});

Route::get('/export/{type}', function ($type) {
    return Excel::create('Export'.$type, function ($excel) {
        $excel->sheet('Sheetname', function ($sheet) {
            $sheet->fromArray(Appointment::all(), null, 'A1', false, false);
        });
    })->download($type);
});
