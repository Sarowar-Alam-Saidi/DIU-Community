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

//community status all route start
Route::get('/','communityController@index')->name('welcome');
Route::post('/community-post','communityController@communityPost')->name('communityPost');
Route::post('/status-delete/{id}','communityController@delete')->name('status-delete');
Route::get('/status-edit/{id}','communityController@Edit')->name('status-edit');
Route::post('/community-update/{id}','communityController@update')->name('community-update');
Route::get('/community-comment/{id}','communityController@comment')->name('community-comment');
//community status all route end



//profile all route start
Route::get('/profile','profileController@profile')->name('profile');
Route::get('/profile/edit/{id}','profileController@profileEdit')->name('profile.edit');
Route::post('/profile-update','profileController@profileUpdate')->name('profileUpdate');
//profile all route end 


Route::get('/messages','messageController@message')->name('message');

//event all route start
Route::get('/events','eventController@events')->name('events');
Route::post('/event-post','eventController@eventPost')->name('eventPost');
Route::post('/event-delete/{id}','eventController@delete')->name('event-delete');
Route::get('/event-edit/{id}','eventController@Edit')->name('event-edit');
Route::post('/event-update/{id}','eventController@update')->name('event-update');
//event all route end

//jobs all route start
Route::get('/jobs','jobController@jobs')->name('jobs');
Route::post('/job-post','jobController@jobPost')->name('jobPost');
Route::post('/job-delete/{id}','jobController@delete')->name('job-delete');
Route::get('/job-edit/{id}','jobController@Edit')->name('job-edit');
Route::post('/job-update/{id}','jobController@update')->name('job-update');
//jobs all route end

//blood all route start
Route::get('/bloods','bloodController@bloods')->name('bloods');
Route::post('/blood-post','bloodController@bloodPost')->name('bloodPost');
Route::post('/blood-delete/{id}','bloodController@delete')->name('blood-delete');
Route::get('/blood-edit/{id}','bloodController@Edit')->name('blood-edit');
Route::post('/blood-update/{id}','bloodController@update')->name('blood-update');
//blood all route end

//user(student login/registration defualt route)
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//admin
Route::group(['prefix' => 'backend'], function(){

	 //Admin Login Routes
	
	  Route::get('/', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	  Route::post('/adminlogin-submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	  Route::post('/adminlogout-submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

	//Others Routes

	Route::get('/deshboard', 'admin\userControlController@index')->name('admin.index');
	Route::get('/teacher', 'admin\userControlController@teacher')->name('admin.teacher');
	Route::post('/admin-teacher/{id}','admin\userControlController@teacherdelete')->name('teacher-delete');


	Route::get('/student', 'admin\userControlController@student')->name('admin.student');
	Route::post('/admin-student/{id}','admin\userControlController@studentdelete')->name('student-delete');


	Route::get('/community', 'admin\postControlController@community')->name('admin.community');
	Route::post('/admin-community-delete/{id}','admin\postControlController@communitydelete')->name('community-delete');

	Route::get('/event', 'admin\postControlController@event')->name('admin.event');
	Route::post('/admin-event-delete/{id}','admin\postControlController@eventdelete')->name('event-delete');

	Route::get('/blood', 'admin\postControlController@blood')->name('admin.blood');
	Route::post('/admin-blood-delete/{id}','admin\postControlController@blooddelete')->name('blood-delete');

	Route::get('/job', 'admin\postControlController@job')->name('admin.job');
	Route::post('/admin-job-delete/{id}','admin\postControlController@jobdelete')->name('job-delete');

});