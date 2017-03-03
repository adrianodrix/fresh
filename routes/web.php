<?php

Use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $topic = new \Fresh\Models\Topic();
    $topic->title = 'Topic one';
    $topic->user()->associate($request->user());
    $topic->save();
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/mailing/unsubscribe/{token}', 'Mailing\SubscriptionController@unsubscribe');
