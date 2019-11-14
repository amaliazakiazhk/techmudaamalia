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
/*
Route::get('/', function () {
    return view('index');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/register', function () {
    return view('register');
});

*/
/* route untuk frontend */
Route::get('/', 'FrontController@home');
Route::get('/front', 'FrontController@index');
Route::get('/front/baju', 'FrontController@baju');
Route::get('/front/program', 'FrontController@program');
Route::post('/front', 'FrontController@index');
Route::get('/tentang', 'FrontController@tentang');
Route::get('/front/register', 'FrontController@register');
Route::get('/front/postregister' ,'FrontController@postregister');
Route::get('/front/{register}','FrontController@show');
Route::get('/front/postdaftar' ,'FrontController@postdaftar');
Route::get('/front/{register}/pendaftaran','FrontController@pendaftaran');



/*route untuk login */
Route::get('/auths/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');

Route::group(['middleware' => ['auth', 'checkRole:admin']], 
  function(){


/* route untuk halaman admin bagian program*/ 
Route::get('/program','ProgramController@index')->middleware('auth');
Route::get('/program/create', 'ProgramController@create');
Route::post('/program','ProgramController@store');
Route::get('/program/export_excel', 'ProgramController@export_excel');
Route::get('/program/cetak_pdf', 'ProgramController@cetak_pdf');
Route::get('/program/{program}', 'ProgramController@show');
Route::get('/program/{program}/destroy', 'ProgramController@destroy');
Route::get('/program/{program}/edit', 'ProgramController@edit');
Route::patch('/program/{program}', 'ProgramController@update');

});

/* route untuk halaman register dan daftar donatur */ 

Route::get('/daftar_donatur','RegisterController@index')->middleware('auth');
Route::get('/daftar_donatur/create','RegisterController@create');
Route::get('/daftar_donatur/{hasil}/cari', 'RegisterController@cari');
Route::get('/daftar_donatur/{register}','RegisterController@show');
Route::post('/daftar_donatur','RegisterController@store');
Route::delete('/daftar_donatur/{register}', 'RegisterController@destroy');
Route::get('/daftar_donatur/{register}/edit', 'RegisterController@edit');
Route::patch('/daftar_donatur/{register}', 'RegisterController@update');


/*halaman dashboard admin */
Route::get('/dashboard', 'DashboardController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth', 'checkRole:admin,donasi']], function(){
Route::get('/home', 'HomeController@index');

});
