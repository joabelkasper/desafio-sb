<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| 
*/

Route::group(['prefix' => 'api'], function(){

	Route::group(['prefix' => 'tweet'], function(){
		
		Route::get('', 'TweetController@allTweets');

		Route::get('{id}', ['uses' => 'TweetController@getTweet']);

		Route::post('', ['uses' => 'TweetController@saveTweet']);

		Route::put('{id}', ['uses' => 'TweetController@updateTweet']);

		Route::delete('{id}', ['uses' => 'TweetController@deleteTweet']);

	});		
	
});

Route::get('/', function () {
    return view('home');
});

Route::get('todos-tweets', 'TweetController@showAllTweets');
