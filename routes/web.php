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
Route::get('Contact', 'SettingController@Contact');
Route::get('Attachment', 'SettingController@Attachment');

Route::get('Educational', 'SettingController@Educational');
Route::get('Nationality', 'SettingController@Nationality');
Route::get('TUV', 'SettingController@TUV');
Route::get('LicenseType', 'SettingController@LicenseType');
Route::get('jobTitle', 'SettingController@jobTitle');

Route::get('users', 'SettingController@users');
Route::get('ViewName', 'SettingController@ViewName');
Route::get('Permission', 'SettingController@Permission');

Route::resource('Emp','EmpController');
Route::get('Absence', 'SettingController@Absence');

 

Route::get('lang/{lang}',  function($lang)
{
    session()->has("lang")?session()->forget("lang"):"";
    $lang=="ar"?  session()->put("lang","ar"):  session()->put("lang","en");
    return back();
});

// Route::view('/Order', 'Order');
// Route::view('/DocumentSearch',"DocumentSearch");
// Route::view('/Document', 'Document');
// Route::view('/Documentation', 'Documentation');
// Route::view('/DocumentServesTimeLine', 'DocumentServesTimeLine');
Route::view('/welcome', 'welcome');

// Route::view('/users', 'users');
// Route::view('/Serves', 'Serves');
// Route::view('/DocumentType', 'DocumentType');

Auth::routes();

Route::get('/', 'TransactionController@index')->name('home');
// Route::get('/', 'homeController@index')->name('home');
// Route::get('users', 'homeController@users');




