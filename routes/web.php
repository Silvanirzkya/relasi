<?php

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


// Route::get('/orangtua', function () {
//     $or =App\orangtua::all();
//     foreach ($or as $data) {
//     	echo $data->nama_ibu." dengan ";
//     	echo $data->nama_ayah." <br>";
//     	foreach ($data->anak as $key => $value) {
//     		echo "<li>$value->nama</li>";
//     	}
    
//     }

// });


Route::get('/percobaan','MyController@index');
Route::get('/percobaan2','MyController@tampilan');
Route::get('/percobaan3','MyController@tampilanmodel');
Route::get('/admin', function () {
    return view('admin');
});
Auth::routes();
Route::resource('/orangtua','OrangtuaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
