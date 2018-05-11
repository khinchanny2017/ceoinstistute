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
    return view('frontend.home');
});

//Call Frontend 
Route::get('/account-finance', 'Frontend\CollegesController@index')->name('index');
Route::get('/marketing-sales', 'Frontend\CollegesController@marketingSales')->name('marketingSales');
Route::get('/infor-system', 'Frontend\CollegesController@inforSystem')->name('inforSystem');
Route::get('/hospi-tourism', 'Frontend\CollegesController@hospiTourism')->name('hospiTourism');
Route::get('/design-firm', 'Frontend\CollegesController@designFile')->name('designFile');
Route::get('/foreign-language', 'Frontend\CollegesController@ForeignLaguage')->name('ForeignLaguage');

//about AboutController
Route::get('/about-us','Frontend\AboutController@index')->name('index');


//speed feature
Route::get('/speed-feature','Frontend\SpeedFeatureController@index')->name('index');

//end frontend

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home/page', 'Backend\HomePageController@mainImages')->name('mainImages');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//backend
Route::resource('backend/partner/form','Backend\PartnerShipController');
Route::resource('backend/student/form','Backend\StudentInstituteController');

// ProfessorController
Route::get('/professor','Backend\ProfessorController@index')->name('index');
Route::get('/professor/create','Backend\ProfessorController@create')->name('create');
Route::post('/professor/store','Backend\ProfessorController@store')->name('store');



