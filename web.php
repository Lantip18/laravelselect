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

// Route::get('/', function () {
//     // return view('welcome');
//     echo "Selamat Datang";
// });

// Route::get('/satu', function () {
//     // return view('welcome');
//     echo "Selamat Datang :)";
// });

// Route::get('/dua', function () {
//     // return view('welcome');
//     echo "Selamat Datang  Lantip :)";
// });

// Route::get('/tiga', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip Mukti :)";
// });

// Route::get('/empat', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip Mukti Mumpuni:)";
// });

// Route::get('/lima', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip Mukti M:)";
// });

// Route::get('/enam', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip M. M.:)";
// });

// Route::get('/tujuh', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip";
// });

// Route::get('/delapan', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip Mukti";
// });

// Route::get('/sembilan', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip Mukti Mumpuni";
// });

// Route::get('/sepuluh', function () {
//     // return view('welcome');
//     echo "Selamat Datang Lantip M. M.";
// });

// Memanggil view
// Route::get('/', function () {
//     return view('template');

// });




//memanggil controller
Route:: get('/usang', 'usangController@index');

Route::resource('kontak', 'Kontak');
Route::get('/', function(){
    return view('index');
});
Route:: get('/cleaningservice', 'cleanercontroller@index');
/* file controllernya namanya usangController
nama urt usang
index nama functionnya
*/