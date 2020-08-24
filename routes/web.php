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

Route::get('/', 'TinController@index');
Route::get('tin/{id}', 'TinController@chitiettin');
Route::get('ttl/{id}', 'TinController@tintrongloai');
Route::get('lienhe/', 'TinController@lienhe');
Route::post('lienhe/', 'GuimailController@guimaillienhe');
Route::get('timkiem/', 'TinController@timkiem');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('theloai', 'TheloaiController');
    Route::resource('loaitin', 'LoaitinController');
    Route::resource('tintuc', 'TintucController');
    Route::resource('ykien', 'YKienController');
    Route::resource('users', 'UsersController');   
    Route::get('/layloaitintrong1theloai/{idTL}', function($idTL){  
        $kq = DB::select("SELECT idLT, Ten FROM loaitin WHERE idTL=$idTL");
        foreach($kq as $row)  
        echo "<option value={$row->idLT}> {$row->Ten} </option>";    
    });
});
