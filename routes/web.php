<?php

Route::view('/', 'vazhenegar.index');
Route::view('about-us', 'vazhenegar.about-us');
Route::view('tmp', 'vazhenegar.tmp');

Route::resource('tos', TermsOfServiceController::class);
Route::resource('NewsLetterMembers', NewsLetterMembersController::class);
Route::resource('quiz', QuizController::class);

Route::get('employment/city/{state_id}', 'TranslatorEmploymentController@cities');
Route::resource('TranslatorEmployment', TranslatorEmploymentController::class);

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('/dashboard/Order',OrderController::class);

Route::post('/GetDailyVisitors/{day}', function ($day) {
    return (new App\Session)->GetSiteVisitors($day);
});

Route::post('/UserMenus/{user}','HomeController@MenuPicker');

//========================== Helpers Routes ======================//
//Get users that have Online mode in DB
Route::get('/GetOnlineUsers', function () {
    return OnlineUsers();
});

//Set Online and Offline users mode in DB
Route::get('/SetUsersMode',function (){
    SetUsersMode();
});

//Get users that fill employment form for translation
Route::get('/NewEmployments',function (){
   return NewEmployment();
});

//Get count of orders that registered by all of users (to show in admin badges)
Route::get('/AllNewRegisteredOrders',function (){
   return AllNewRegisteredOrders();
});

//Get count of orders that registered by a specific user (to show in that users badges)
Route::get('/UserRegisteredOrders/{UserId}',function ($UserId){
   return UserRegisteredOrders($UserId);
});
