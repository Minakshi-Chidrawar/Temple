<?php

Route::get('/', 'TempleController@index');
Route::get('/main', ['as' => 'main', 'uses' => 'TempleController@index']);
Route::get('/aboutTemple', ['as' => 'aboutTemple', 'uses' => 'TempleController@aboutTemple']);
Route::get('/mission', ['as' => 'mission', 'uses' => 'TempleController@mission']);
Route::get('/horoscope', ['as' => 'horoscope', 'uses' => 'TempleController@horoscope']);
Route::get('/donation', ['as' => 'donation', 'uses' => 'TempleController@donation']);
Route::get('/aarati', ['as' => 'aarati', 'uses' => 'TempleController@aarati']);
Route::get('/gayatriMantra', ['as' => 'gayatriMantra', 'uses' => 'TempleController@gayatriMantra']);
Route::get('/mataji', ['as' => 'mataji', 'uses' => 'TempleController@mataji']);
Route::get('/hanumanChalisa', ['as' => 'hanumanChalisa', 'uses' => 'TempleController@hanumanChalisa']);
Route::get('/inTempleActivities', ['as' => 'inTempleActivities', 'uses' => 'TempleController@inTempleActivities']);
Route::get('/outTempleActivities', ['as' => 'outTempleActivities', 'uses' => 'TempleController@outTempleActivities']);
Route::get('/easyFundRaising', ['as' => 'easyFundRaising', 'uses' => 'TempleController@easyFundRaising']);
Route::get('/templeExtension', ['as' => 'templeExtension', 'uses' => 'TempleController@templeExtension']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'TempleController@create']);
Route::post('/contact', ['as' => 'contact.store', 'uses' => 'TempleController@store']);

//Route::get('/image-view','ImageController@index');
//Route::post('/image-view','ImageController@store');
//Route::get('viewImage','ImageController@create');

//Route::get('/home','ImageController@index')->name('home');
Route::get('/album','ImageController@index');
Route::post('/album','ImageController@store')->name('album.store');
Route::get('/gallery','ImageController@gallery')->name('gallery');
Route::get('/gallery/images/{id}','ImageController@show');
Route::post('/album/image','ImageController@addImage')->name('album.image');
Route::delete('/image/{image}','ImageController@destroy')->name('image.delete');

Route::get('/search','SearchController@search')->name('search');
Route::get('/results','SearchController@results')->name('results');

Route::get('/homeImages','HomeUploadImageController@index')->name('homeImages');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes for event/s
Route::get('/events', 'EventController@index')->name('events');
Route::get('/event/create', 'EventController@create')->name('event.create');
Route::post('/event/create','EventController@store')->name('event.store');
Route::get('/events/{event}/edit', 'EventController@edit')->name('event.edit');
Route::post('/events/{event}/edit', 'EventController@update')->name('event.update');
Route::get('/events/event/{id}', 'EventController@show');
Route::delete('/event/{event}', 'EventController@destroy')->name('event.delete');

// Routes for Vacancies/ Vacancy
Route::get('/vacancies', 'VacancyController@index')->name('vacancies');
Route::get('/vacancy/create', 'VacancyController@create')->name('vacancy.create');
Route::post('/vacancy/create','VacancyController@store')->name('vacancy.store');
Route::get('/vacancies/{vacancy}/edit', 'VacancyController@edit')->name('vacancy.edit');
Route::post('/vacancies/{vacancy}', 'VacancyController@update')->name('vacancy.update');
Route::delete('/vacancy/{vacancy}', 'VacancyController@destroy')->name('vacancy.delete');

// Routes to add subscriber to the user table
Route::post('/subscribe','subscribeController@store')->name('subscribe');

// Routes for content/s
Route::get('/contents', 'IndexController@index')->name('contents');
Route::get('/content/create', 'IndexController@create')->name('content.create');
Route::post('/content/create','IndexController@store')->name('content.store');
Route::get('/contents/{content}/edit', 'IndexController@edit')->name('content.edit');
Route::post('/contents/{content}/edit', 'IndexController@update')->name('content.update');
Route::get('/contents/content/{id}', 'IndexController@show');
Route::delete('/content/{content}', 'IndexController@destroy')->name('content.delete');
Route::get('/calendar', 'IndexController@getCalendar')->name('calendar');
