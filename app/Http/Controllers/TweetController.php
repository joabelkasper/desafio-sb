<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
use App\Tweet;
use Response;


class TweetController extends BaseController{
    
	protected $tweet = null;

	public function __construct(Tweet $tweet){
		$this->tweet = $tweet;
	}

	public function allTweets(){

		return Response::json($this->tweet->allTweets());

	}

	public function getTweet($id){
		
		$tweet = $this->tweet->getTweet($id);

		if(!$tweet)
			return Response::json(['response' => 'Tweet não encontrado.'], 400);
		else
			return Response::json($tweet, 200);

	}

	public function saveTweet(Request $request){
		
		if(!is_null($request->input('tweet'))){
			
			$tweet = $request->input('tweet');

			if(strlen($tweet) <= 140 && strlen($tweet) >= 5){

				return Response::json($this->tweet->saveTweet($request));

			}else{

				return Response::json(['response' => 'O tweet deve ter no minímo 5 caracteres e no máximo 140.'], 400);

			} 

		}else{

			return Response::json(['response' => 'Utilize o parâmetro tweet para criar um novo.'], 400);

		}

		
	}

	public function updateTweet($id, Request $request){
		
		$tweet = $this->tweet->updateTweet($id, $request);

		if(!$tweet)
			return Response::json(['response' => 'Tweet não encontrado.'], 400);
		else
			return Response::json($tweet, 200);

	}

	public function deleteTweet($id){
		
		$tweet = $this->tweet->deleteTweet($id);

		if(!$tweet)
			return Response::json(['response' => 'Tweet não encontrado.'], 400);
		else
			return Response::json(['response' => 'Tweet removido com sucesso'], 200);

	}

	protected function showAllTweets(){
		
		$tweets = $this->tweet->allTweets();

    	return view('todos-tweets',['tweets' => $tweets]);

    }

}
