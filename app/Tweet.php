<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    
	protected $fillable = ['tweet'];

	public function allTweets(){

		return self::all();		

	}

	public function saveTweet($request){

		$input = $request->all();
		$tweet = new Tweet();
		$tweet->fill($input); // Utilizando mass assignament
		$tweet->save();

		return $tweet;

	}

	public function updateTweet($id, $request){

		$tweet = Tweet::find($id);

		if(is_null($tweet)){

			return false;

		}else{
			$input = $request->all();
			$tweet->fill($input); // Utilizando mass assignament
			$tweet->save();

			return $tweet;
		}

	}

	public function getTweet($id){

		$tweet = Tweet::find($id);

		if(is_null($tweet))
			return false;
		else
			return $tweet;	
	}

	public function deleteTweet($id){

		$tweet = Tweet::find($id);

		if(is_null($tweet))
			return false;
		else
			return $tweet->delete();	

	}

}
