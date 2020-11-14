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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
// add all Controller
Route::resource('profiles', 'ProfileController');
Route::resource('/userimage', 'UserimagesController');
Route::resource('/addteacher', 'AddteacherController');
Route::resource('/addstudent', 'AddstudentController');
Route::resource('/addparent', 'AddparentController');
Route::resource('/classadd', 'ClassaddController');
Route::resource('/sectionadd', 'SectionaddController');
Route::resource('/subjectadd', 'SubjectaddController');
Route::resource('/blogcategory', 'BlogcategoryController');
Route::resource('/blogsubcategory', 'BlogsubcategoryController');
Route::resource('/addblog', 'AddblogController');
